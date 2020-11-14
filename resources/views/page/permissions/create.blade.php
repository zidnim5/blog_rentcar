@extends('layout.app')

@section('active-permission')
    active
@endsection

@section('css')

@endsection

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Roles</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <form action="{{ route('permission.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Permission Name</label>
                <input type="text" name="name"  class="form-control @error('name') is-invalid  @enderror" placeholder="ex : role-list">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Create </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')

@endsection
