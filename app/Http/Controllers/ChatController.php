<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatController extends Controller
{
    protected $openAIKey;
    protected $openAIEndpoint;

    public function __construct()
    {
        $this->openAIKey = env('OPENAI_API_KEY');
        $this->openAIEndpoint = 'https://api.openai.com/v1/completions';
    }

    public function chat(Request $request)
    {
        $client = new Client();

        $response = $client->post($this->openAIEndpoint, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->openAIKey,
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo-0125',
                'prompt' => $request->input('prompt'),
                'max_tokens' => 150,
                'temperature' => 0.7,
                'stop' => ['\n']
            ],
        ]);

        return $response->getBody()->getContents();
    }
}
