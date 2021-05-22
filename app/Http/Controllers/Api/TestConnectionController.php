<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestConnectionController extends Controller
{
    public function index(){
        return response()->json('connected',200);
    }
}
