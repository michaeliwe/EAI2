<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PegawaiAPIController extends Controller
{
    public function index()
    {
        $client = new Client;
        do {
            $response = $client->get("http://dummy.restapiexample.com/api/v1/employees");
            $statusCode = $response->getStatusCode();
        } while($statusCode != 200);

        $contents = json_decode($response->getBody()->getContents(), true);
        return response()->json($contents, 200);
    }
}
