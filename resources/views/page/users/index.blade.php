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
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>

            <li class="breadcrumb-item active">Users</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="card card-default">
    <div class="card-header">
        <div class="card-title">
            <h3> Users </h3>
        </div>
        <div class="card-tools">
            <a class="btn btn-primary" href="{{ route('users.create') }}"> Create New User</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach ($data as $key => $user)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('users.destroy', [$user->id]) }}" method="post">
                            @method('delete')
                            @csrf
                            <a class="btn btn-warning text-white" href="{{ route('users.show',$user->id) }}">Show</a>
                            @can('user-edit')
                                <a class="btn btn-primary text-white" href="{{ route('users.edit',$user->id) }}">Edit</a>
                            @endcan
                            @can('user-delete')
                                <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure ?')">Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
</div>
@endsection

@section('script')

@endsection