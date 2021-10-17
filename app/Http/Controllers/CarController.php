<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view("page.client.page.car.index");
    }

    public function detail(){
        return view("page.client.page.car.detail");
    }
}
