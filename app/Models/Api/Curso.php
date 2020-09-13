<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';
    protected $fillable = ['idCurso', 'nomeCurso'];
    public $timestamps = false;

    /**
     * Relacionamento com Tabela Grade
     *
     * @return void
     */
    public function grades()
    {
        return $this->hasMany('App\Models\Api\Grade');
    }

    /**
     * Relacionamento Curso com Disciplinas
     *
     * @return void
     */
    public function disciplinas()
    {
        return $this->belongsToMany('App\Models\Api\Disciplinas')
                    ->using('App\Models\Api\DisciplinaCursoGrade');
    }
}
