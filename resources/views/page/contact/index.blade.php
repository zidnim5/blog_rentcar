@extends('layout.app')

@section('active-contact    ')
active
@endsection

@section('css')

@endsection

@section('breadcrumb')
<div class="row mb-2">
    <div class="col-sm-6">
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>

            <li class="breadcrumb-item active">Contact</li>
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
                    <h3> @error('email') {{ $message }} @enderror</h3>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('contact.update', ['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Phone:</strong>
                                <input type="text" name="number" class="form-control @error('title') is-invalid @enderror" value="{{ $data->number }}" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="email" name="email" class="form-control" value="{{ $data->email }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Adress:</strong>
                                <textarea name="address" class="form-control @error('address') is-invalid @enderror" required>{{ $data->address }}</textarea>
                            </div>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Maps:</strong>
                                <textarea name="maps" class="form-control @error('maps') is-invalid @enderror" required>{{ $data->maps }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Facebook:</strong>
                                <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ json_decode($data->social_media) ? json_decode($data->social_media)->facebook : '' }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Instagram:</strong>
                                <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ json_decode($data->social_media) ? json_decode($data->social_media)->instagram : '' }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Twitter:</strong>
                                <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ json_decode($data->social_media) ? json_decode($data->social_media)->twitter : '' }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
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

@endsection