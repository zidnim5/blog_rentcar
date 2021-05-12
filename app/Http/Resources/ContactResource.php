<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'number' => $this->number ?? null,
            'address' => $this->addrss ?? null,
            'email' => $this->email ?? null,
            'maps' => $this->maps ?? null
        ];
    }
}
