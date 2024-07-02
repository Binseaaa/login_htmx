<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $user = User::all();

        return view('welcome')->with('login-success', 'Login successful!');
    }
}
