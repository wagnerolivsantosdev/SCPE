<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\EmentaService;
use Illuminate\Http\Request;

/**
 * @OA\Post(
 *     path="/api/ementa",
 *     operationId="getEmentaById",
 *     tags={"Ementa"},
 *     summary="Ementa",
 *     description="Retorna Ementa Baseada nos IDs",
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
 *      @OA\Parameter(
 *          name="disciplina",
 *          description="ID da Disciplina",
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
 *                     property="curso",
 *                     type="integer"
 *                 ),
 *                 @OA\Property(
 *                     property="grade",
 *                     type="integer"
 *                 ),
 *                 @OA\Property(
 *                      property="disciplina",
 *                      type="integer"
 *                  ),
 *                 example={"curso": "1", "grade": "1", "disciplina": "1"}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK"
 *     )
 * )
 */

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
