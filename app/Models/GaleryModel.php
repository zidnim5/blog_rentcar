<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class GaleryModel extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table='galery';

    
     /** spatie library */
     public function registerMediaCollections()
     {
         $this->addMediaCollection('galery')->useDisk('galery');
     }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('galery')
            ->nonQueued();

        $this->addMediaConversion('original')
            ->nonQueued();
   }
}
