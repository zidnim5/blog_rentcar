<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\GaleryModel;
use Alert;
use App\Http\Controllers\Traits\MediaServiceTrait;
use App\Http\Controllers\Controller;

class GaleryController extends Controller
{

    use MediaServiceTrait;

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
        $data = GaleryModel::orderBy('id','DESC')->paginate(5);
        return view('page.galery.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.galery.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        $slug = str_replace(' ', '-',strtolower($request->title));

        $data = new GaleryModel;
        $data->slug = $slug;
        $data->title = $request->title;
        // $data->desc = $request->desc;

        $data->save();

        $extension = isset($request->file) ? $request->file->getClientOriginalExtension('file') : 'png';    
        isset($request->file) ? $data->addMedia($request->file)->usingFileName(str_random().'.'.$extension)->toMediaCollection('galery') : '';
        
        return redirect()->route('galery.index')
                        ->with('success','User created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = GaleryModel::find($id);
        $asset = '';
        if (isset($data->getMedia('galery')[0])) {
            $galery_origin = $this->UrlGenerator('galery',$data->getMedia('galery')[0]->getUrl());
            $asset = config('app.base_url').'/'.$galery_origin;
        }
        return view('page.galery.show',compact('data', 'asset'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galery = GaleryModel::find($id);

        return view('page.galery.edit',compact('galery'));
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
            'title' => 'required',
        ]);

        $data = GaleryModel::find($id);

        $data->title = $request->title;
        // $data->desc = $request->desc;

        $data->save();

        $extension = isset($request->file) ? $request->file->getClientOriginalExtension('file') : 'png';    

        isset($request->file) ? $data->clearMediaCollection('galery') : '';
        isset($request->file) ? $data->addMedia($request->file)->usingFileName(str_random().'.'.$extension)->toMediaCollection('galery') : '';

        return redirect()->route('galery.index')
                        ->with('success','User updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = GaleryModel::find($id);
        $data->clearMediaCollection('galery');
        $data->delete();

        Alert::success('Success', '');

        return redirect()->route('galery.index')
                        ->with('success','User deleted successfully');
    }
}
