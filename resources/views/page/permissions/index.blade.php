@extends('layout.app')

@section('active-permission')
    active
@endsection

@section('css')

@endsection

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">permissions</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">permissions</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
    <a href="{{ route('permission.create') }}">New</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach ($permissions as $key => $item_permission)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $item_permission->name }}</td>
                <td>
                    <form action="{{ route('permission.destroy', [$item_permission->id]) }}" method="post">
                        @method('Delete')
                        <!-- can('item_permission-edit') -->
                            <a class="btn btn-primary" href="{{ route('permission.edit', $item_permission->id) }}">Edit</a>
                        <!-- endcan -->
                        <!-- can('item_permission-delete') -->
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        <!-- endcan -->
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('script')

@endsection
