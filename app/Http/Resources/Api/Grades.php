<?php

namespace App\Http\Resources\Api;

use App\Http\Resources\Api\Grade;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Grades extends ResourceCollection
{
    public $collects = Grade::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['data' => $this->collection];
    }
}
