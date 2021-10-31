@extends('layout.app')

@section('active-permission')
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
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Roles</li>
            <li class="breadcrumb-item active">Create</li>
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
                    <h3> Add Permission </h3>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('permission.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Permission Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid  @enderror" placeholder="ex : role-list">
                    </div>
                    <div class="form-group">
                        @can('item_permission-create')
                            <button type="submit" class="btn btn-primary"> Create </button>
                        @endcan
                    </div>
                    </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-4">

    </div>
</div>
@endsection

@section('script')

@endsection