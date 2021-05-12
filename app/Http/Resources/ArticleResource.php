<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Traits\MediaServiceTrait;

class ArticleResource extends JsonResource
{

    use MediaServiceTrait;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        if($this->resource){
            if (isset($this->getMedia('article')[0])) {
                $original = $this->UrlGenerator('article',$this->getMedia('article')[0]->getUrl());
                
                $image_cover = config('app.base_url').'/'.$original;
            }
        }

        return [
            'slug'=>$this->slug ?? null,
            'title'=>$this->title ?? null,
            'content'=>$this->content ?? null,
            'view'=>$this->vie ?? null,
            'image_cover' => $image_cover ?? null 
        ];
    }
}
