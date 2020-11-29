@extends('layout.app')

@section('active-role')
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
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Roles</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-success card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-edit"></i>
                    {{ $role->name }}
                </h3>
                <div class="card-tools">
                    @can('role-edit')
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#assign-permission">Add new</a>
                    @encan
                </div>
            </div>
            <div class="card-body">
                @can('role-edit')
                    @foreach($role->getAllPermissions() as $permission)
                    <a href="#" class="btn btn-default permissions" data-toggle="modal" data-target="#revoke-permission" data-url="{{ url('/roles/permission/'.$permission->name) }}">
                        {{$permission->name}} <i class="fa fa-times text-danger" style="font-size:12px;"></i>
                    </a>
                    @endforeach
                @endcan
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection

@section('modal')
<!-- alert deleting permission -->
<div class="modal fade" id="revoke-permission">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deletePermission" action="#" method="POST">
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


<!-- assing new permission -->
<div class="modal fade" id="assign-permission">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="" action="{{ url('/roles/permission') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add Permission</h4>
                    <input type="hidden" name="id_role" value="{{ $role->id }}">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">Permission</label>
                    <select name="permission" id="" class="form-control" required>
                        @php $i=0; @endphp
                        @foreach($permissions as $permission)
                            @php $empty = true; @endphp

                            @foreach($role->getAllPermissions() as $item_permission)
                                @if($permission->name == $item_permission->name)
                                    @php $empty = false; @endphp
                                @endif  
                            @endforeach

                            @if($empty)
                                <option value="{{$permission->name}}">{{$permission->name}}</option>
                            @else
                                @php $empty = true; $i++ @endphp
                            @endif
                        @endforeach
                        @if(count($permissions) < 1) 
                            <option value="">--Nothing data--</option>
                        @elseif(count($permissions) == $i)
                            <option value="">--Nothing data--</option>
                        @endif
                    </select>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-success"> Add</button>
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
    $('.permissions').click(function() {
        $('#deletePermission').attr('action', $(this).data('url'));
    });
</script>
@endsection