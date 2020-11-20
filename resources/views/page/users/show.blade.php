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
                    <h3> Detail User </h3>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <table>
                        <tr>
                            <td>
                                <strong>Name</strong>
                            </td>
                            <td> :
                                {{ $user->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Email</strong>
                            </td>
                            <td> :
                                {{ $user->email }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Roles</strong>
                            </td>
                            <td> :
                                @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Permissions</strong>
                            </td>
                            <td> :
                                @if(!empty($user->getAllPermissions()))
                                @foreach($user->getAllPermissions() as $item_permission)
                                <label class="badge badge-success">{{ $item_permission->name }}</label>
                                @endforeach
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
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