<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Models\ContactModel;
use Alert;
use Hash;
use App\Http\Controllers\Traits\MediaServiceTrait;

class ContactController extends Controller
{

    public function __construct(){
        $this->middleware('permission:user-create|user-edit|user-delete|role-delete', ['only' => ['index','store']]);
        $this->middleware('permission:user-create', ['only' => ['create','store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = ContactModel::orderBy('id','DESC')->first();
        return view('page.contact.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'number' => 'required',
            'address' => 'required',
            'email' => 'required',
            'maps' => 'required',
        ]);

        $data = ContactModel::find($id);

        $data->number = $request->number;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->maps = $request->maps;

        $data->save();

        return redirect()->route('contact.index')
                        ->with('success','Contact updated successfully');
    }
}
