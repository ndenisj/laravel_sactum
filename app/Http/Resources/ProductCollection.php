<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    // get additional info and pass to the response
    protected $success;
    protected $message;

    public function addInfo($success, $message)
    {
        $this->success = $success;
        $this->message = $message;

        return $this;
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "success" => $this->success,
            "message" => $this->message,
            "data" => $this->collection,
        ];

        // return $this->collection->map(function (ProductResource $resource) use ($request) {
        //     return $resource->addInfo($this->success, $this->message, $this->others = '')->toArray($request);
        // })->all();
    }



}
