<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get(config('newapi.base_url') . '/top-headlines?country=in&apiKey=' . config('newapi.api_key'))
            ->json();

        return view('index', compact('response'));
    }
}
