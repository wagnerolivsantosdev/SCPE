<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\GradeService;
use Illuminate\Http\Request;


class GradeController extends Controller
{

    public function index(Request $request, GradeService $gradeService)
    {
        return $gradeService->grids($request);
    }
}
