@extends('layout.app')

@section('active-home')
active
@endsection

@section('css')

@endsection

@section('breadcrumb')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ol>
    </div><!-- /.col -->
    <div class="col-12">
        <div class="lockscreen-wrapper text-center">
            <!-- START LOCK SCREEN ITEM -->

                <!-- lockscreen credentials (contains the form) -->
                    <img src="{{ asset('assets/icons/dashboard.svg') }}" style="width:50%;" alt="User Image">
                <!-- /.lockscreen credentials -->
            <!-- /.lockscreen-item -->
            <div class="help-block text-center mt-4">
                {{ \Illuminate\Foundation\Inspiring::quote() }}
            </div>
        </div>
        <!-- /.center -->
    </div>
</div><!-- /.row -->
@endsection

@section('content')

@endsection

@section('script')

@endsection