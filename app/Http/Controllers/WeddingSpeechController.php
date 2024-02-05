<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeddingSpeechController extends Controller
{
    public function generateSpeech(Request $request)
    {
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
