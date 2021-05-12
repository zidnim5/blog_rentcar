<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Traits\MediaServiceTrait;

class GaleryResource extends JsonResource
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
            if (isset($this->getMedia('galery')[0])) {
                $original = $this->UrlGenerator('galery',$this->getMedia('galery')[0]->getUrl());
                
                $image_cover = config('app.base_url').'/'.$original;
            }
        }

        return [
            'slug'=>$this->slug ?? null,
            'title'=>$this->title ?? null,
            'desc'=>$this->desc ?? null,
            'image_cover' => $image_cover ?? null 
        ];
    }
}
