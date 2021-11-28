<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ArticleModel;
use App\Http\Resources\ArticleResource;

class ArticleController extends Controller
{

    public function getDashboard(Request $req){
        $data = ArticleModel::where('is_dashboard', true)->orderBy('updated_at', 'desc')->paginate($req->paginate ? $req->paginate : 6);
        
        $base_url = config('app.url').'/car/';
        $type = 'article';
        $view = view('page.client.components.gridcard', compact('data','base_url', 'type'));

        return  $view;
    }

    public function index(Request $req) {
        $data = ArticleModel::orderBy('id','ASC')->paginate($req->paginate ? $req->paginate : 15);

        $base_url = config('app.url').'/car/';
        $type = 'article';
        
        if(!isset($req->recentpost)){
            $view = view('page.client.components.gridcard', compact('data','base_url', 'type'));
        }else{
            $view = view('page.client.components.recentpost', compact('data','base_url'));
        }
        
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
