<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'type' => $this->type, //nullable for special purposes.
            'expiration_date' => $this->expiration_date->format('M d, Y'),
            'email_verified_at' => $this->email_verified_at,
            'is_expire_access' => $this->is_expire_access,
            'created_at' => $this->created_at->format('M d, Y') .' / '.$this->created_at->format('h:i a'),
            'roles' => $this->roles ? $this->roles->pluck('name') : null
        ];
    }
}
