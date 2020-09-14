<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class DisciplinaCursoGrade extends JsonResource
{
    /**
     * Transforma o Resource 'Request' em um array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['ementa' => $this->ementa];
    }
}
