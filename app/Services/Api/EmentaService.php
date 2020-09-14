<?php

namespace App\Services\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\DisciplinaCursoGrades as DCG;
use App\Models\Api\DisciplinaCursoGrade;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class EmentaService
{
    /**
     * Retorna Ementa
     *
     * @param Request $request
     * @return array
     */
    public function syllabus(Request $request)
    {
        return response()->json(
            new DCG($this->getSyllabus($request)),
            Response::HTTP_OK
        );
    }

    /**
     * Obtém Ementa no BD 
     *
     * @param [type] $curso
     * @param [type] $grade
     * @return array
     */
    public function getSyllabus(Request $request)
    {
        return DB::table('disciplinaCursoGrade as dcg')
                  ->join('curso as c', 'c.idCurso', '=', 'dcg.id_Curso')
                  ->join('disciplina as d', 'd.idDisciplina', '=', 'dcg.id_Disciplina')
                  ->join('grade as g', 'g.idGrade', '=', 'dcg.id_Grade')
                  ->select('dcg.ementa')
                  ->where([
                      ['dcg.id_Curso', $request->input('curso')],
                      ['dcg.id_Grade', $request->input('grade')],
                      ['dcg.id_Disciplina', $request->input('disciplina')]
                  ])->get();
    }

    /**
     * Atualiza Ementa
     *
     * @param Request $request
     * @return void
     */
    public function saveSyllabus(Request $request)
    {
        DB::transaction(function () use ($request) {
            DisciplinaCursoGrade::where([
                ['id_Curso', $request->input('curso')],
                ['id_Grade', $request->input('grade')],
                ['id_Disciplina', $request->input('disciplina')]
            ])->update(['ementa' => $request->ementa]);
        });
    }
}
