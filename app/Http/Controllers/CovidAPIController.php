<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CovidAPIController extends Controller
{
    public function index()
    {
        $country = 'indonesia';
        $client = new Client;

        $response = $client->get("https://api.covid19api.com/live/country/$country/status/confirmed/date/2020-03-21T13:13:30Z");
        $contents = json_decode($response->getBody()->getContents(), true);

        return view('covid.index', compact('country', 'contents'));
    }
}
