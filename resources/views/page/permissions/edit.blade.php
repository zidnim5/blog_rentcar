@extends('layout.app')

@section('active-permission')
    active
@endsection

@section('css')

@endsection

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Permission</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <form action="{{ route('permission.update', ['permission'=> $permission->id ]) }}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="">Permission Name</label>
                <input type="text" name="name"  class="form-control @error('name') is-invalid  @enderror" placeholder="ex : role-list" value="{{ $permission->name }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Update </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')

@endsection
