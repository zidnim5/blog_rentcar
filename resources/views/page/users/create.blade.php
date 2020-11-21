@extends('layout.app')

@section('active-user')
active
@endsection

@section('css')
<link rel="stylesheet" href="https://harvesthq.github.io/chosen/chosen.css">
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
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Password:</strong>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Confirm Password:</strong>
                                <input type="password" name="confirm-password" class="form-control @error('password') is-invalid @enderror" required>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Role:</strong>
                                <br>
                                <select name="roles" id="role" class="form-control">
                                    @foreach($role as $item_role)
                                    <option value="{{ $item_role->name }}"> {{ $item_role->name }} </option>
                                    @endforeach
                                </select>
                                <!-- <select data-placeholder="Choose tags ..." name="tags[]" multiple class="chosen-select" class="form-control">
                                        <option value="Engineering">Engineering</option>
                                        <option value="Carpentry">Carpentry</option>
                                        <option value="Plumbing">Plumbing</option>
                                        <option value="Electical">Electrical</option>
                                        <option value="Mechanical">Mechanical</option>
                                        <option value="HVAC">HVAC</option>
                                    </select>     -->
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Add</button>
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
<script src="https://harvesthq.github.io/chosen/chosen.jquery.js"></script>

<script>
    document.getElementById('output').innerHTML = location.search;
    $(".chosen-select").chosen();
</script>
@endsection