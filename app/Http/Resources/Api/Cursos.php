<?php

namespace App\Http\Resources\Api;

use App\Http\Resources\Api\Curso;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Cursos extends ResourceCollection
{
    public $collects = Curso::class;

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
