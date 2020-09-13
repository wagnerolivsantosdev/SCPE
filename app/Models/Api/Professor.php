<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professor';
    protected $fillable = ['idProfessor', 'nomeProfessor'];
    public $timestamps = false;

    /**
     * Relacionamento Professor com Disciplinas
     *
     * @return void
     */
    public function disciplinas()
    {
        return $this->belongsToMany('App\Models\Api\Disciplina')
                    ->using('App\Models\Api\DisciplinaProfessor');
    }
}
