@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user"></i> {{ $title }}</h1>
        </div>
    </div>
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
            <a href="{{ route('admin.users') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Users</a>
            <form action="{{ route('admin.users.store') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile">  
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="name"> Name</label>
                            <input class="form-control" type="text" placeholder="Enter  name" id="name" name="name" value="{{ old('name') }}"/>
                            @error('name')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror                                  
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="email">Email</label>
                            <input class="form-control" type="text" placeholder="Enter Email" id="email" name="email" value="{{ old('email') }}"/>
                            @error('email')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>                       
                        <div class="form-group col-md-5">
                            <label class="control-label">Profile</label>                             
                            <input class="form-control" type="file" name="profile" onchange="loadFile(event,'logoImg')"/>
                            @error('profile')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                             <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">                            
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="phone"> Phone</label>
                            <input class="form-control" type="text" placeholder="Enter Phone" id="phone" name="phone" value="{{ old('phone') }}"/>
                            @error('phone')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror                                  
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="address">Address</label>
                            <input class="form-control" type="text" placeholder="Enter Address" id="address" name="address" value="{{ old('address') }}"/>
                            @error('address')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="city">City</label>
                            <input class="form-control" type="text" placeholder="Enter City" id="city" name="city" value="{{ old('city') }}"/>
                            @error('city')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror    
                        </div> 
                        <div class="form-group col-md-6">
                            <label class="control-label" for="state">State</label>
                           <input class="form-control" type="text" placeholder="Enter State" id="state" name="state" value="{{ old('state') }}"/>
                            @error('state')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror    
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="country">Country</label>
                           <input class="form-control" type="text" placeholder="Enter Country" id="country" name="country" value="{{ old('country') }}"/>
                            @error('country')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror    
                        </div> 
                        <div class="form-group col-md-6">
                            <label class="control-label" for="zipcode">Zip Code</label>
                           <input class="form-control" type="text" placeholder="Enter Zip Code" id="zipcode" name="zipcode" value="{{ old('zipcode') }}"/>
                            @error('zipcode')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror    
                        </div>                         
                    </div>  
                </div>
                <div class="tile-footer">
                    <div class="row d-print-none mt-2">
                        <div class="col-12 text-right">
                            <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
                        </div>
                    </div>
                </div>    
            </form>    
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
     <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
     <script>
            CKEDITOR.replace( 'description' );
        </script>
@endpush