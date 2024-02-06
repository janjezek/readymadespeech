<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class OpenAIController extends Controller
{
    public function showForm()
    {
        return view('form'); // Create this view in resources/views/form.blade.php
    }

    public function handleSubmit(Request $request)
    {
        $husband = $request->input('husband');
        $wife = $request->input('wife');

        // Assuming you're sending these details to OpenAI for some processing
        /*
        $client = new Client();
        $response = $client->request('POST', 'http://localhost:1234/v1/chat/completions', [
            'headers' => [
                //'Authorization' => 'Bearer YOUR_OPENAI_API_KEY',
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'prompt' => "Email: $email, Name: $name", // Customize your prompt as needed
                'temperature' => 0.5,
                'max_tokens' => 100,
            ],
        ]);
        */

        $response = Http::timeout(60)->withHeaders([ // Increase timeout to 60 seconds
            'Content-Type' => 'application/json',
            // 'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
            // Add the Authorization header if needed, for example:
            // 'Authorization' => 'Bearer ' . $apiKey,
        ])->post('http://localhost:1234/v1/chat/completions', [
            "messages" => [
                ["role" => "system", "content" => "You are speech writer and you are writing a speech for a wedding."],
                ["role" => "user", "content" => "Write a heartfelt wedding speech that best man will give. Husbands name is $husband and wifes name is $wife."]
            ],
            "temperature" => 0.7,
            "max_tokens" => -1,
            "stream" => false
        ]);

        /* OpenAI
        $apiKey = env('OPENAI_API_KEY');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo', // Use the latest available model
            "messages" => [
                [
                    'role' => 'user',
                    'content' => 'Write a heartfelt wedding speech for a best friend.'
                ]
            ],
        ]);
        

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            // Add the Authorization header if needed, for example:
            // 'Authorization' => 'Bearer ' . $apiKey,
        ])->post('http://localhost:1234/v1/chat/completions', [
            "messages" => [
                ["role" => "system", "content" => "Always answer in rhymes."],
                ["role" => "user", "content" => "Introduce yourself."]
            ],
            "temperature" => 0.7,
            "max_tokens" => -1,
            "stream" => false
        ]);
        */

        //$result = json_decode($response->getBody(), true);

        //return response()->json($result);
        $data = $response->json();
        $speechText = $data['choices'][0]['message']['content'] ?? 'Sorry, I was unable to generate a speech.';
        return view('speech')->with('speech', $speechText);
    }
}
