<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
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
            "title"=> $this->title,
            "post"=> $this->post,
            // "user_name"=> $this->
            "created_at"=> $this->created_at,
        ];
    }
}
