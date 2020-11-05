<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function login(LoginRequest $loginRequest)
    {
        if (!Auth::attempt($loginRequest->only(['email', 'password']))) {
            return redirect()->back()
                ->withErrors('Incorrect Username or Password! Please try again.');
        }

        return redirect()->route('dashboard');
    }
}
