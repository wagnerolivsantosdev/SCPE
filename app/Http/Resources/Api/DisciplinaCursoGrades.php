<?php

namespace App\Http\Resources\Api;

use App\Http\Resources\Api\DisciplinaCursoGrade;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DisciplinaCursoGrades extends ResourceCollection
{
    public $collects = DisciplinaCursoGrade::class;

    /**
     * Transforma Coleção de Resource 'Request' em um array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['data' => $this->collection];
    }
}