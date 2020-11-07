@extends('layout.app')

@section('active-role')
    active
@endsection

@section('css')

@endsection

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Roles</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Roles</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach ($roles as $key => $role)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}">Show</a>
                    @can('role-edit')
                        <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                    @endcan
                    @can('role-delete')
                        <form action="{{ route('roles.destroy', [$role->id]) }}" method="delete">
                            @csrf
                            <a class="btn btn-info btn-xs" href="{{ route('users.show',$user->id) }}">Show</a>
                            <a class="btn btn-primary btn-xs" href="{{ route('users.edit',$user->id) }}">Edit</a>
                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('script')

@endsection
