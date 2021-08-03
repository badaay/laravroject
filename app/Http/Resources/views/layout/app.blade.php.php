<?php

namespace App\Http\Resources\views\layout;

use Illuminate\Http\Resources\Json\JsonResource;

class app.blade.php extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
