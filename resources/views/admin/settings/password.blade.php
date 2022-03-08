@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-cogs"></i> {{ $title }}</h1>
        </div>
    </div>
    {{-- @include('admin.partials.flash') --}}
    @if(Session::has('success'))
    <div class="bs-component">
        <div class="alert alert-dismissible alert-success">
            <button class="close" type="button" data-dismiss="alert">×</button><strong></strong>{{Session::get('success')}}
        </div>
    </div>
    @else    
        @if ($errors->any())
        <div class="bs-component">
            <div class="alert alert-dismissible alert-danger">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Oh snap! </strong>Something went wrong. Please Check try again.
            </div>
        </div>
        @endif    
    @endif   
    <div class="row user">
        <div class="col-md-12">
            <form action="{{ route('admin.updatepassword',['id'=>1]) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile">  
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="name"> Password</label>
                            <input class="form-control" type="text" placeholder="password" id="password" name="password" value="{{ old('password') }}"/>
                            @error('password')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror                                  
                        </div>
                    </div>  
                    <div class="row d-print-none mt-2">
                        <div class="col-1 text-right">
                            <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>update</button>
                        </div>
                    </div>
                </div>
                    
            </form> 
        </div>
    </div>
@endsection
