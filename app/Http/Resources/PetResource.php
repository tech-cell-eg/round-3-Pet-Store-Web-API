<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'color' => $this->color,
            'gender' => $this->gender,
            'age' => $this->age,
            'price' => $this->price,
            'is_popular' => $this->is_popular,
            'category' => $this->category->name,
            'images' => $this->images->map(function ($image) {
                return asset("storage/".$image->image_path);
            })
        ];
    }
}
