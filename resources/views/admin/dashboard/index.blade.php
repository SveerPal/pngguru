@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Users</h4>
                    <p><b>{{ $ucnt }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon">
                <i class="icon fa fa-image fa-3x"></i>
                <div class="info">
                    <h4>Images</h4>
                    <p><b>{{ $icnt }} </b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon">
                <i class="icon fa fa-list fa-3x"></i>
                <div class="info">
                    <h4>Image Category</h4>
                    <p><b>{{ $icat_cnt }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon">
                <i class="icon fa fa-tag fa-3x"></i>
                <div class="info">
                    <h4>Image Tags</h4>
                    <p><b>{{ $itag_cnt }}</b></p>
                </div>
            </div>
        </div>
    </div>
@endsection