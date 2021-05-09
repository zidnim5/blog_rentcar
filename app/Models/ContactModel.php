<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class ContactModel extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
       'number' ,'address', 'email', 'maps',
    ];
    
    protected $table = 'contact';

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('contact')
            ->nonQueued();

        $this->addMediaConversion('original')
            ->nonQueued();
   }
}
