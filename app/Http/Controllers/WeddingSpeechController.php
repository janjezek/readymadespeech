<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeddingSpeechController extends Controller
{
    public function generateSpeech(Request $request)
    {
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
        */

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


        return $response->json();

        /*
        $data = $response->json();

        // Extracting the speech text
        $speechText = $data['choices'][0]['text'] ?? 'Sorry, I was unable to generate a speech.';

        return response()->json([
            'speech' => $speechText,
        ]);
        */
    }
}
