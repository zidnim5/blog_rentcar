<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use App\Http\Resources\ContactResource;

class ContactController extends Controller
{
    public function index(){
        $data = ContactModel::orderBy('id','DESC')->paginate(5);
        return response()->json(['success'=>true, 'data'=> ContactResource::collection($data)], 200);
    }
}
