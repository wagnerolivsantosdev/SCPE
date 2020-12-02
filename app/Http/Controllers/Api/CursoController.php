<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\CursoService;

/**
 *   @OA\Post(
 *      path="/api/cursos",
 *      operationId="getCoursesList",
 *      tags={"Curso"},
 *      summary="Lista dos Cursos",
 *      description="Retorna Lista dos Cursos",
 *      @OA\Response(
 *          response=200,
 *          description="Ok"
 *       ),
 *      @OA\Response(
 *           response=400,
 *           description="Bad Request"
 *        ),
 *       security={
 *           {"api_key_security_example": {}}
 *       }
 *     )
 *
 * Returns list of Courses
 * 
 * @return void
 */

class CursoController extends Controller
{

    public function index(CursoService $cursoService)
    {
        return $cursoService->courses();
    }
}
