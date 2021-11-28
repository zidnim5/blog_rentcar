<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Traits\MediaServiceTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ArticleModel;
use Alert;
use App\Http\Controllers\Traits\RandomString;

class ArticleController extends Controller
{

    use MediaServiceTrait;
    use RandomString;

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
        $data = ArticleModel::orderBy('id','DESC')->paginate(5);
        return view('page.article.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.article.create');
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
            'content' => 'required',
        ]);

        $slug = str_replace(' ', '-',strtolower($request->title));

        $data = new ArticleModel;
        $data->title = $request->title;
        $data->slug = $slug."_".$this->generateUid(4);
        $data->content = $request->content;
        $data->is_dashboard =  $request->is_dashboard ? true : false;

        $data->save();

        $extension = isset($request->file) ? $request->file->getClientOriginalExtension('file') : 'png';    
        isset($request->file) ? $data->addMedia($request->file)->usingFileName(str_random().'.'.$extension)->toMediaCollection('article') : '';
        
        return redirect()->route('articles.index')
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
        $data = ArticleModel::find($id);
        $asset = '';
        if (isset($data->getMedia('article')[0])) {
            $article_original = $this->UrlGenerator('article',$data->getMedia('article')[0]->getUrl());
            
            $asset = config('app.base_url').'/'.$article_original;
        }
        return view('page.article.edit',compact('data', 'asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = ArticleModel::find($id);
        return view('page.article.edit',compact('article'));
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
            'content' => 'required',
        ]);

        $data = ArticleModel::find($id);

        $data->title = $request->title;
        $data->content = $request->content;
        $data->is_dashboard =  $request->is_dashboard ? true : false;

        $data->save();

        $extension = isset($request->file) ? $request->file->getClientOriginalExtension('file') : 'png';    

        isset($request->file) ? $data->clearMediaCollection('article') : '';

        isset($request->file) ? $data->addMedia($request->file)->usingFileName(str_random().'.'.$extension)->toMediaCollection('article') : '';

        return redirect()->route('articles.index')
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
        $data = ArticleModel::find($id);
        $data->clearMediaCollection('article');
        $data->delete();

        Alert::success('Success', '');

        return redirect()->route('articles.index')
                        ->with('success','User deleted successfully');
    }
}
