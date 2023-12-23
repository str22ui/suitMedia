<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiController extends Controller
{
    public function fetchIdeas()
    {
        $client = new Client();
        $url = 'https://suitmedia-backend.suitdev.com/api/ideas';

        // Parameters for the API request
        $params = [
            'json' => [
                'page' => [
                    'number' => 1,
                    'size' => 10,
                ],
                'append' => ['small_image', 'medium_image'],
                'sort' => '-published_at' // Change this based on your sorting preference
            ]
        ];

        try {
            $response = $client->request('GET', $url, $params);
            $ideas = json_decode($response->getBody(), true)['data']; // Assuming 'data' contains the ideas

            return view('ideas.index', compact('ideas'));
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                // Handle the error response accordingly
                return "Error: " . $statusCode . " - " . $response->getBody();
            } else {
                return "Request failed: " . $e->getMessage();
            }
        }
    }
}
