<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applications;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Exception;
use function PHPUnit\Framework\isJson;

class EvaluationController extends Controller
{
    public function evaluate(Request $request)

    {

        try {
            $application = Applications::findOrFail($request->application_id);

            $answers = $request->input('answers'); // This should be an array from the form submission


            $application->answers = json_encode($answers);


            // Fetch the job and the questions
            $job = DB::table('jobs')->where('id', $request->job_id)->first();  // Fetch job data, adapt if needed

            $questions = json_decode($job->questions);

            // Prepare the messages for OpenAI to evaluate
            $messages = $this->prepareEvaluationMessages($questions, $answers);


            // Call OpenAI API to evaluate the answers
            $response = $this->callOpenAIForEvaluation($messages);


            // Get the result from the response
            $result = $response['choices'][0]['message']['content'];


            $decodeResults = json_decode($result, true);


            $correctAnswers = $decodeResults['correct_answers'];



            $analysis = $decodeResults['detailed_analysis'];


            $application->correct_answers = $correctAnswers;
            $application->analysis = $analysis;
            $application->save();
            // Return the result in the expected format (e.g., number of correct answers)
            return redirect()->back()->with('success', 'Thank you for submitting your answers. Your answer will be evaluated');
        } catch (Exception $e) {
            return redirect()->back()->with('failed-evaluation', 'An error has occurred while submitting your answer. Please resubmit');
        }
    }

    // Prepare messages to send to the OpenAI model for evaluation
    protected function prepareEvaluationMessages($questions, $answers)
    {
        $messages = [];

        // Add an instruction for the model to explicitly evaluate and return the number of correct answers in a JSON format
        $messages[] = [
            'role' => 'system',
            'content' => "You are a helpful assistant that evaluates answers to questions. Please compare each answer to the corresponding correct answer. For each question, return the evaluation result in the following JSON format: {\"correct_answers\": X}, where X is the number of correct answers."
        ];

        // Iterate through the questions and answers and include them in the conversation
        for ($i = 0; $i < count($questions); $i++) {
            $messages[] = [
                'role' => 'user',
                'content' => "Question: {$questions[$i]} Answer: {$answers[$i]}"
            ];
        }

        // Add a prompt to explicitly ask for the count of correct answers
        $messages[] = [
            'role' => 'user',
            'content' => 'Based on the answers provided, grade a correct 1pt or 0.5pts if it is partially correct. Also provide your detailed insights or analysis per answer of the user. Return the data in json format only and never change it. Always enclose each analysis in double quotes. "{["correct_answers": X, "detailed_analysis": ["Analysis 1", "Analysis 2", "Analysis 3" and so on.]}" '
            // 'content' => "Based on the answers provided, grade a correct answer 1pt, and 0.5pts if it is partially correct. Also, create a very detailed analysis and provide your insights regarding the answer of the user and indicate how much points you gave them. You may get the 'correct_answers' by getting the sum of the grade you provided to the answer. Please compute properly. This will be the end format and must never change: {'correct_answers': X, 'detailed_analysis': {Analysis to answer 1, Analysis to answer 2, and so on}}."
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
            // 'max_tokens' => 2500, // Limit the number of tokens (optional)
        ]);

        return $response->json();
    }

    protected function parseCorrectAnswers($response)
    {
        // Log the OpenAI response for debugging

        // Check if the response contains the expected 'choices' and 'message' keys
        if (isset($response['choices'][0]['message']['content'])) {
            $responseContent = $response['choices'][0]['message']['content'];

            // Try to decode the response as JSON
            $data = json_decode($responseContent, true);

            // If the JSON decoding is successful and we have the 'correct_answers' key, return the value
            if (isset($data['correct_answers'])) {
                return (int) $data['correct_answers'];
            }
        }
        // If response structure is not as expected, return 0 as default
        return 0;
    }
}
