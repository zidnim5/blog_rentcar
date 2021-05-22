<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use App\Http\Resources\ContactResource;

class ContactController extends Controller
{
    public function index(){
        $data = ContactModel::orderBy('id','DESC')->first();
        return response()->json(['success'=>true, 'data'=> new ContactResource($data)], 200);
    }
}
