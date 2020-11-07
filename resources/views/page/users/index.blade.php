@extends('layout.app')

@section('active-user')
    active
@endsection

@section('css')

@endsection

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')

    <div class="pull-right">
        <a class="btn btn-primary btn-xs mb-3" href="{{ route('users.create') }}"> Create New User</a>
    </div>

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
            <form action="{{ route('users.destroy', [$user->id]) }}" method="delete">
                @csrf
                <a class="btn btn-info btn-xs" href="{{ route('users.show',$user->id) }}">Show</a>
                <a class="btn btn-primary btn-xs" href="{{ route('users.edit',$user->id) }}">Edit</a>
                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
            </form>
          </td>
        </tr>
       @endforeach
    </tbody>
    </table>
    {{ $data->links() }}
@endsection

@section('script')

@endsection
