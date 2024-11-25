<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class EvaluationController extends Controller
{
    public function evaluate(Request $request)
    {
        // Assuming the request contains 'answers' as an array of answers
        $answers = $request->input('answers'); // This should be an array from the form submission

        // Fetch the job and the questions
        $job = DB::table('jobs')->where('id', $request->job_id)->first();  // Fetch job data, adapt if needed
        $questions = json_decode($job->questions);


        // Prepare the messages for OpenAI to evaluate
        $messages = $this->prepareEvaluationMessages($questions, $answers);

        // Call OpenAI API to evaluate the answers
        $response = $this->callOpenAIForEvaluation($messages);

        // Get the result from the response
        $result = $response['choices'][0]['message']['content'];

        return $result;
        // Return the result in the expected format (e.g., number of correct answers)
        return response()->json([
            'correct_answers' => $this->parseCorrectAnswers($result)
        ]);
    }

    // Prepare messages to send to the OpenAI model for evaluation
    protected function prepareEvaluationMessages($questions, $answers)
    {
        $messages = [];

        // Prepare the list of questions and answers in a readable format
        for ($i = 0; $i < count($questions); $i++) {
            $messages[] = [
                'role' => 'system',
                'content' => "You are a helpful assistant that can evaluate answers."
            ];
            $messages[] = [
                'role' => 'user',
                'content' => "Question: {$questions[$i]} Answer: {$answers[$i]}"
            ];
        }

        // Add a prompt to evaluate the answers
        $messages[] = [
            'role' => 'user',
            'content' => "Evaluate the answers and provide the number of correct answers."
        ];

        return $messages;
    }

    protected function callOpenAIForEvaluation($messages)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY')
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo', // You can use gpt-3.5-turbo or another model
            'messages' => $messages,
            'max_tokens' => 50, // Limit the number of tokens (optional)
        ]);

        return $response->json();
    }

    protected function parseCorrectAnswers($response)
    {
        // Parse the response to extract the number of correct answers (custom logic)
        // This is just a basic example. You can improve it based on the OpenAI response format.
        preg_match('/correct answers: (\d+)/', $response, $matches);
        return $matches[1] ?? 0;  // Return 0 if no match is found
    }
}
