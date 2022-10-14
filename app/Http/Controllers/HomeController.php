<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get(config('newapi.base_url') . '/everything?q=Apple&from=2022-10-14&sortBy=popularity&apiKey=' . config('newapi.api_key'));
        dd($response->json());
    }
}
