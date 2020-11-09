<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    public function __construct()
    {
        $this->middleware('autenticador');
    }

    public function index(Request $request)
    {
        $pagina = $request->path();
        return view('secretaria', compact('pagina'));
    }
}
