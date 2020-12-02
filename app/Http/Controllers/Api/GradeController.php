<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\GradeService;
use Illuminate\Http\Request;

/**
 *   @OA\Post(
 *      path="/api/grades",
 *      operationId="getGridsById",
 *      tags={"Grade"},
 *      summary="Lista das Grades",
 *      description="Retorna Grade Baseada no ID",
 *      @OA\Parameter(
 *          name="curso",
 *          description="ID do Curso",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Ok"
 *       ),
 *       security={
 *           {"api_key_security_example": {}}
 *       }
 *     )
 *
 * Returns list of Grids
 * 
 */

class GradeController extends Controller
{

    public function index(Request $request, GradeService $gradeService)
    {
        return $gradeService->grids($request);
    }
}
