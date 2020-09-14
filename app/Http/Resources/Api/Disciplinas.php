<?php

namespace App\Http\Resources\Api;

use App\Http\Resources\Api\Disciplina;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Disciplinas extends ResourceCollection
{
    public $collects = Disciplina::class;

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
