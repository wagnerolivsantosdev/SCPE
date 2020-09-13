<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\CursoService;

class CursoController extends Controller
{

    public function index(CursoService $cursoService)
    {
        return $cursoService->courses();
    }
}
