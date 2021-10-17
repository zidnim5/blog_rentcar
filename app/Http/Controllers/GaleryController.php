<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleryController extends Controller
{
    
    public function index(){
        return view("page.client.page.galery.index");
    }

    public function detail(){
        return view("page.client.page.galery.detail");
    }
}
