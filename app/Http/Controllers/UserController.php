<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = [
            "user_id" => 1,
            "name" => "Faian Aalam",
            "email" => "f24aalam@gmail.com"
        ];

        return $user;
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required"
        ]);
    }
}
