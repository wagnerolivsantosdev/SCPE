<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class Disciplina extends JsonResource
{
    /**
     * Transforma o Resource 'Request' em um array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (int)$this->idDisciplina,
            'disciplina' => $this->nomeDisciplina
        ];
    }
}
