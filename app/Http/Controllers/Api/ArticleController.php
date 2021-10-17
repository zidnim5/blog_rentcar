<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ArticleModel;
use App\Http\Resources\ArticleResource;

class ArticleController extends Controller
{

    public function index(Request $req) {
        $data = ArticleModel::orderBy('id','DESC')->paginate($req->paginate ? $req->paginate : 9);
        
        $base_url = config('app.url').'/car/detail';
        $view = view('page.client.components.gridcard', compact('data','base_url'));
        
        return $view;
    }

    public function show($slug) {
        $data = ArticleModel::where('slug', $slug)->first();

        if($data){
            return response()->json(['success'=>true, 'data'=>new ArticleResource($data)], 200);
        }
        return response()->json(['success'=>false, 'message'=> 'Not found'], 200);
    }
}
