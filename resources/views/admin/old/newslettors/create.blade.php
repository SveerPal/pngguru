@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-file"></i> {{ $title }}</h1>
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
            <a href="{{ route('admin.pages') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Pages</a>
            <form action="{{ route('admin.pages.store') }}" method="POST" role="form" enctype="multipart/form-data">
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
                            <label class="control-label" for="slug">Slug</label>
                            <input class="form-control" type="text" placeholder="Enter Slug" id="slug" name="slug" value="{{ old('slug') }}"/>
                            @error('slug')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="Parent"> Parent</label>
                            <select class="form-control" id="parent" name="parent" value="{{ old('parent') }}"/>
                                <option value="">Select Parent</option>
                                @foreach($parentPage as $page)                                
                                    <option value="{{ $page->id }}">{{ $page->name }}</option>
                                @endforeach 
                            </select>
                            @error('parent')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-5">
                            <label class="control-label">Banner</label>                             
                            <input class="form-control" type="file" name="banner" onchange="loadFile(event,'logoImg')"/>
                            @error('banner')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                             <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">                            
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="alt"> Alt</label>
                            <input class="form-control" type="text" placeholder="Enter  alt text" id="alt" name="alt" value="{{ old('alt') }}"/>
                            @error('alt')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror                                  
                        </div>
                        <div cl
                        <div class="form-group col-md-6">
                            <label class="control-label" for="meta_title">Meta Title</label>
                            <textarea class="form-control" rows="1" placeholder="Enter Meta Title" id="meta_title" name="meta_title">{{ old('meta_title') }}</textarea>
                            @error('meta_title')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label" for="meta_description">Meta Description</label>
                            <textarea class="form-control" rows="4" placeholder="Enter seo meta description for store" id="meta_description"
                                name="meta_description" >{{ old('meta_description') }}</textarea>
                            @error('meta_description')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror    
                        </div> 
                        <div class="form-group col-md-12">
                            <label class="control-label" for="description">Description</label>
                            <textarea class="form-control" rows="4" placeholder="Enter  description" id="description"
                                name="description" >{{ old('description') }}</textarea>
                            @error('description')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror    
                        </div>                        
                    </div>  
                </div>
                <div class="tile-footer">
                    <div class="row d-print-none mt-2">
                        <div class="col-12 text-right">
                            <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
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