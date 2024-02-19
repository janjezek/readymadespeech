<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class OpenAIController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function handleSubmit(Request $request)
    {
        $husband = $request->input('husband');
        $wife = $request->input('wife');

        $response = Http::timeout(60)->withHeaders([ // Increase timeout to 60 seconds
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

        $data = $response->json();
        $speechText = $data['choices'][0]['message']['content'] ?? 'Sorry, I was unable to generate a speech.';
        $speechText = explode("\n", $speechText); // Splitting the text into paragraphs
        return view('speech')->with('speech', $speechText);
    }
}
