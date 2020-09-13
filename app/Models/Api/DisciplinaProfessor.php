<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DisciplinaProfessor extends Pivot
{
    protected $table = 'disciplinaProfessor';
    protected $fillable = ['id_Disciplina', 'id_Professor'];
    public $timestamps = false;
}
