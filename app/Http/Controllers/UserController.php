<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $user = User::all();

        if (Auth::user()->is_admin == 1) {
            return view('admin-login');
        } else {
            return view('user.user-login');
        }
    }
}
