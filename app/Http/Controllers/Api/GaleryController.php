<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GaleryModel;
use App\Http\Resources\GaleryResource;

class GaleryController extends Controller
{
    public function index(Request $req) {
        $data = GaleryModel::orderBy('id','DESC')->paginate($req->paginate ? $req->paginate : 9);

        $base_url = config('app.url').'/car/detail';
        $view = view('page.client.components.gridcard', compact('data','base_url'));
        
        return $view;
    }

    public function show($slug) {
        $data = GaleryModel::where('slug', $slug)->first();
        if($data){
           return response()->json(['success'=>true, 'data'=> new GaleryResource($data)], 200);
        }
        return response()->json(['success'=>false, 'message'=> 'Not found'], 200);
    }
}
