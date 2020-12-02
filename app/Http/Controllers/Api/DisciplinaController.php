<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\DisciplinaService;

/**
 * @OA\Post(
 *     path="/api/disciplinas",
 *     operationId="getDiciplinesById",
 *     tags={"Disciplina"},
 *     summary="Lista Disciplinas",
 *     description="Retorna Lista das Disciplinas baseadas nos IDs",
 *      @OA\Parameter(
 *          name="curso",
 *          description="ID do Curso",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Parameter(
 *          name="grade",
 *          description="ID da Grade",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="id",
 *                     type="string"
 *                 ),
 *                 @OA\Property(
 *                     property="name",
 *                     type="string"
 *                 ),
 *                 example={"curso": "1", "grade": "1"}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK"
 *     )
 * )
 */

class DisciplinaController extends Controller
{

    public function index(Request $request, DisciplinaService $disciplinaService)
    {
        return $disciplinaService->disciplines($request);
    }
}
