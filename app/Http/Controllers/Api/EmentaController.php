<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\EmentaService;
use Illuminate\Http\Request;

class EmentaController extends Controller
{
    public function index(Request $request, EmentaService $ementaService)
    {
        return $ementaService->syllabus($request);
    }


    public function update(Request $request, EmentaService $ementaService)
    {
        $ementaService->saveSyllabus($request);
    }
}
