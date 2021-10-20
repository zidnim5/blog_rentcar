<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class CarController extends Controller
{
    public function index(){
        return view("page.client.page.car.index");
    }

    public function detail(Request $req){
        $data = ArticleModel::where('slug', $req->slug)->first();

        return view("page.client.page.car.detail", compact('data'));
    }
}
