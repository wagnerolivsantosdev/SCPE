<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $pagina = $request->path();

        return view('dashboard', compact('pagina'));
    }
}
