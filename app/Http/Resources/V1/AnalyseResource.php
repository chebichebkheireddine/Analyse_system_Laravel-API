<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnalyseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=>$this->id_analyse,
            "IdLab"=>$this->lab_id,
            "NameAnalyse"=>$this->name_analyse,
            "Price"=>$this->price,
        ];
    }
}
