<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LabResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            "id"=>$this->id_lab,
            "NameLab"=>$this->name_lab,
            "Email"=>$this->Email,
            "Passeord"=>$this->password,
            "Address"=>$this->Address,
            "Phone"=>$this->tlpn,
        ];
    }
}
