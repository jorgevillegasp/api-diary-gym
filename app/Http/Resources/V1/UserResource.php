<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transforme el recurso en una matriz.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'        => $this->id,
            'direccion' => $this->address_id,
            'nombre'    => $this->name,
            'correo'    => $this->email,
            'peso'      => $this->weight,
            'fecha_nacimiento' => $this->birth_date,
            'estado'    => $this->status,
        ];
    }
}
