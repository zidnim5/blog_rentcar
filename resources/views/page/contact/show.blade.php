@extends('layout.app')

@section('active-article')
active
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" />
<style>
    #output {
        padding: 20px;
        background: transparent;
    }

    form {
        margin-top: 20px;
    }

    select {
        width: 300px;
    }
</style>
@endsection

@section('breadcrumb')
<div class="row mb-2">
    <div class="col-sm-6">
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Article</li>
            <li class="breadcrumb-item active">Update</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                <div class="card-title">
                    <h3> Update Article @error('email') {{ $message }} @enderror</h3>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('articles.update', ['article' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Title:</strong>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $data->title }}" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>content:</strong>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" value="" required>{{ $data->content }}</textarea>
                            </div>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>File:</strong>
                                <input type="file" name="file" class="dropify" data-default-file="{{ $asset }}">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
    CKEDITOR.replace( 'content' );
    $('.dropify').dropify();
    document.getElementById('output').innerHTML = location.search;
    $(".chosen-select").chosen();
</script>
@endsection