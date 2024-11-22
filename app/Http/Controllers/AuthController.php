<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function logout(Request $request){
        // $request->session()->forget('user');
    }

    public function register(Request $request){
        return view('auth.register');
    }
}
