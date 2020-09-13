<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DisciplinaCursoGrade extends Pivot
{
    protected $table = 'disciplinaCursoGrade';
    protected $fillable = ['id_Disciplina', 'id_Curso', 'id_Grade', 'ementa'];
    public $timestamps = false;
}
