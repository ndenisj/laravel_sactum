<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "id" => $this->id,
            "name" => $this->name,
            "slug" => $this->slug,
            "description" => $this->description,
            "price" => $this->price,
            "user" => new UserResource($this->user),
        ];
    }

    // public function with($request)
    // {
    //     return [
    //         "success" => true,
    //         "message" => 'This is the msg',
    //         "others" => 'nada',
    //     ];
    // }

    public static function collection($resource)
    {
        return new ProductCollection($resource);
    }


}
