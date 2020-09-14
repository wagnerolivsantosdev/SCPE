<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\DisciplinaService;

class DisciplinaController extends Controller
{

    public function index(Request $request, DisciplinaService $disciplinaService)
    {
        return $disciplinaService->disciplines($request);
    }
}
