<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrarFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class RegistrarController extends Controller
{
    public function index()
    {
        return view('Auth.registrar');
    }

    public function store(RegistrarFormRequest $registrarFormRequest)
    {
        if (!$registrarFormRequest) {
            return redirect()->back()->withErrors($registrarFormRequest->errors());
        }

        $user = User::create([
            'name' => $registrarFormRequest->get('name'),
            'email' => $registrarFormRequest->get('email'),
            'password' => Hash::make($registrarFormRequest->get('password')),
        ]);

        return redirect()->route('login')->with('message', 'User successfully registered!');
    }
}
