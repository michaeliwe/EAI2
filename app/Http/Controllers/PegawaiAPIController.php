<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PegawaiAPIController extends Controller
{
    public function index()
    {
        $client = new Client;

        $response = $client->get("http://dummy.restapiexample.com/api/v1/employees");
        $contents = json_decode($response->getBody()->getContents(), true);

        return view('pegawai.index', compact('contents'));
    }
}
