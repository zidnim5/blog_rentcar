<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GaleryModel;
use App\Http\Resources\GaleryResource;

class GaleryController extends Controller
{

    public function getDashboard(Request $req) {
        $data = GaleryModel::orderBy('updated_at','desc')->where('is_dashboard', true)->paginate($req->paginate ? $req->paginate : 6);
        $type = 'galery';

        $view = view('page.client.components.gridcard', compact('data', 'type'));
        
        return $view;
    }

    public function index(Request $req) {
        $data = GaleryModel::orderBy('id','ASC')->paginate($req->paginate ? $req->paginate : 15);
        $type = 'galery';

        $view = view('page.client.components.gridcard', compact('data', 'type'));
        
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
