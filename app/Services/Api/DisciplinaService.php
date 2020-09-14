<?php

namespace App\Services\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Api\Disciplinas;
use Symfony\Component\HttpFoundation\Response;

class DisciplinaService
{
    /**
     * Retorna Disciplinas
     *
     * @param Request $request
     * @return array
     */
    public function disciplines(Request $request)
    {
        return response()->json(
            new Disciplinas(
                $this->getDisciplines(
                    $request->input('curso'),
                    $request->input('grade')
                )
            ),
            Response::HTTP_OK
        );
    }

    /**
     * Obtém Disciplinas no BD 
     *
     * @param [type] $curso
     * @param [type] $grade
     * @return void
     */
    function getDisciplines($curso, $grade)
    {
        return DB::table('disciplinaCursoGrade as dcg')
                  ->join('curso as c', 'c.idCurso', '=', 'dcg.id_Curso')
                  ->join('disciplina as d', 'd.idDisciplina', '=', 'dcg.id_Disciplina')
                  ->join('grade as g', 'g.idGrade', '=', 'dcg.id_Grade')
                  ->select('d.idDisciplina', 'd.nomeDisciplina')
                  ->where([['dcg.id_Curso', $curso], ['dcg.id_Grade', $grade]])
                  ->orderBy('d.nomeDisciplina')
                  ->get();
    }
}
