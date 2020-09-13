<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grade';
    protected $fillable = ['idGrade', 'anoGrade', 'semestreGrade', 'id_Curso'];
    public $timestamps = false;

    /**
     * Relacionamento com Tabela Curso
     *
     * @return void
     */
    public function curso()
    {
        return $this->belongsTo('App\Models\Api\Curso');
    }
}
