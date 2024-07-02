<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginIndex()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'Login successful!');
        }

        return redirect('login')->with('error', 'Invalid email or password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('logout-success', 'Logout successful!');
    }
}
