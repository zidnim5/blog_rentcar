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

        return response()->json(['success'=>true, 'data'=>ArticleResource::collection($data)], 200);
    }

    public function show($slug) {
        $data = ArticleModel::where('slug', $slug)->first();

        return response()->json(['success'=>true, 'data'=>new ArticleResource($data)], 200);
    }
}
