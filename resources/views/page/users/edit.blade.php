@extends('layout.app')

@section('active-user')
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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
            <li class="breadcrumb-item active">create</li>
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
                    <h3> Create User </h3>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form action="{{ route('users.update', [$user->id]) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Role:</strong>
                                <br>
                                <select name="roles" id="role" class="form-control" required>
                                    <option value="">--Pilih--</option>
                                    @foreach($roles as $item_role)
                                    <option value="{{ $item_role->name }}" @if($user->roles->first()->name == $item_role->name) selected  @endif> {{ $item_role->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Password:</strong>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Confirm Password:</strong>
                                    <input type="password" name="confirm-password" class="form-control @error('password') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
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