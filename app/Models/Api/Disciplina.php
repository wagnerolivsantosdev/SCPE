<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = 'disciplina';
    protected $fillable = ['idDisciplina', 'nomeDisciplina'];
    public $timestamps = false;

    /**
     * Relacionamento Disciplina com Professores
     *
     * @return void
     */
    public function professores()
    {
        return $this->belongsToMany('App\Models\Api\Professor')
                    ->using('App\Models\Api\DisciplinaProfessor');
    }

    /**
     * Relacionamento Disciplina com Cursos
     *
     * @return void
     */
    public function cursos()
    {
        return $this->belongsToMany('App\Models\Api\Curso')
                    ->using('App\Models\Api\DisciplinaCursoGrade');
    }
}
