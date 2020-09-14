<?php

namespace App\Services\Api;

use App\Http\Resources\Api\Grades;
use App\Models\Api\Curso;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GradeService
{
    /**
     * Retorna Grades
     *
     * @param Request $request
     * @return void
     */
    public function grids(Request $request)
    {
        return response()->json(
            new Grades($this->getGrids($request->input('curso'))),
            Response::HTTP_OK
        );
    }

    /**
     * Obtém Grades no BD 
     *
     * @param [type] $curso
     * @param [type] $grade
     * @return void
     */
    public function getGrids($curso)
    {
        return Curso::join('grade as g', 'curso.idCurso', '=', 'g.id_Curso')
                    ->select('g.idGrade', 'g.anoGrade', 'g.semestreGrade')
                    ->where('g.id_curso', $curso)
                    ->orderByDesc('g.anoGrade')
                    ->get();
    }
}
