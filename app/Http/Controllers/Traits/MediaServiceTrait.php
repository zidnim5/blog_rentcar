<?php

namespace App\Http\Controllers\Traits;

trait  MediaServiceTrait
{

    /**
     * Url generator for asset.
     *
     * @param  string{disk}
     * @param  string{url}
     * @return string
    */
    public function UrlGenerator($disk, $url){
        if(!$url){
            return ;
        }
        $url = str_replace('http:', '', $url);
        $url = str_replace('//', '/', $url);
        $url = str_replace('https:', '', $url);
        $url = str_replace('127.0.0.1/', '', $url);
        $url = str_replace('localhost/', '', $url);
        $url = str_replace('localhost:8000/', '', $url);
        $url = str_replace('storage/', '', $url);

        $url = explode('/',$url);
        $url[0] = 'storage/'.$this->convertDisk($disk);

        return implode("/", $url);
    }

    public function convertDisk($disk) {
        if($disk == 'article'){
            return 'articles';
        }elseif($disk == 'galery'){
            return 'galeries';
        }
    }
}
