@extends('layout.app')

@section('active-article')
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

            <li class="breadcrumb-item active">Article</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="card card-default">
    <div class="card-header">
        <div class="card-title">
            <h3> Article </h3>
        </div>
        <div class="card-tools">
            <a class="btn btn-primary" href="{{ route('articles.create') }}"> Create New Article</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>View</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $key => $item)
                <tr>
                    <td>{{ ($data->currentpage() -1) * $data->perpage() + $key + 1 }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->view }}</td>
                    <td width="280px">
                    <div class="row">
                        <div class="col-md text-right">
                            <a href="{{ route('articles.show', ['article'=>$item->id]) }}" class="btn btn-warning">Update</a>
                        </div>
                        <div class="col-md text-left">
                            <form action="{{ route('articles.destroy', ['article' => $item->id ]) }}" method="post">
                            @method('DELETE')
                            @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</button>
                            </form>
                        </div>
                    </div>
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