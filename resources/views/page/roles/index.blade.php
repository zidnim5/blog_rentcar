@extends('layout.app')

@section('active-role')
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
            <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Roles</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
@error('name')
    <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ $message }}
    </div>
@enderror


<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="card-title">
                    <h3>Roles</h3>
                </div>
                <div class="card-tools">    
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#create-role">Create New Role</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Permission</th>
            <th width="280px">Action</th>
        </tr>
        @php
        $i = 1;
        @endphp
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $role->name ?? '' }}</td>
            <td>
                @foreach($role->getAllPermissions() as $permission)
                <a href="#" class="btn btn-success btn-xs">{{$permission->name}}</a>
                @endforeach
            </td>
            <td>
                @can('role-delete')
                <form action="{{ route('roles.destroy', [$role->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <!-- <a class="btn btn-primary text-white" href="{{ route('roles.show', $role->id) }}">Show</a> -->
                    @can('role-edit')
                        <a class="btn btn-primary text-white" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                    @endcan
                    @can('role-delete')
                    <button type="submit" data-url="{{ route('roles.destroy', [$role->id]) }}" class="btn btn-danger delete-role text-white" data-toggle="" data-target="#" onclick="return confirm('Are you sure ?')">Delete</button>
                    @endcan
                </form>
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>


<div class="col-md-12 mb-3">
</div>
<div class="col-md-12">
    
</div>
@endsection

@section('modal')

<!-- alert deleting permission -->
<div class="modal fade" id="delete-role">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteRole" action="#" method="post">
                @method('DELETE')
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <input type="hidden" name="id_role" value="{{ $role->id }}">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- assign new permission -->
<div class="modal fade" id="create-role">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="" action="{{ url('roles') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add Role</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="role">Role</label>
                    <input type="text" id="role" class="form-control" name="name" placeholder="Role Name" value="" required>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-success"> Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection

@section('script')
<script>
    $('.delete-role').click(function() {
        $('#deleteRole').attr('action', $(this).data('url'));
    });
</script>
@endsection