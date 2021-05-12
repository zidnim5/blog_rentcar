<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;


class ArticleModel extends Model implements HasMedia
{

    use HasMediaTrait;

    protected $table = 'article';
    
     /** spatie library */
     public function registerMediaCollections()
     {
         $this->addMediaCollection('article')->useDisk('article');
     }
}
