<?php

namespace App\Services\Api;

use App\Models\Api\Curso;
use App\Http\Resources\Api\Cursos;
use Symfony\Component\HttpFoundation\Response;

class CursoService
{

    public function courses()
    {
        return response()->json(
            new Cursos(Curso::get()->sort()),
            Response::HTTP_OK
        );
    }
}
