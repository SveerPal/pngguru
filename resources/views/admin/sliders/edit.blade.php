@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-sliders"></i> {{ $title }}</h1>
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
            <a href="{{ route('admin.sliders') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Sliders</a>
            @foreach($slidersdetails as $sliderdtl)
            <form action="{{ route('admin.sliders.update',['id'=>$sliderdtl->id]) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf                
                <div class="tile">  
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="site_name"> Name</label>
                            <input class="form-control" type="text" placeholder="Enter  name" id="name" name="name" value="{{ old('name', $sliderdtl->name) }}"/>
                            @error('name')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror                                  
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="heading_first">Heading First</label>
                            <input class="form-control" type="text" placeholder="Enter Heading First" id="heading_first" name="heading_first" value="{{ old('heading_first', $sliderdtl->heading_first) }}"/>
                            @error('heading_first')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>  
                        <div class="form-group col-md-6">
                            <label class="control-label" for="heading_second">Heading Second</label>
                            <input class="form-control" type="text" placeholder="Enter Heading Second" id="heading_second" name="heading_second" value="{{ old('heading_second', $sliderdtl->heading_second) }}"/>
                            @error('heading_second')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div> 
                        <div class="form-group col-md-6">
                            <label class="control-label" for="heading_third">Heading Third</label>
                            <input class="form-control" type="text" placeholder="Enter Heading Third" id="heading_third" name="heading_third" value="{{ old('heading_third', $sliderdtl->heading_third) }}"/>
                            @error('heading_third')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>                       
                        <div class="form-group col-md-5">
                            <label class="control-label">Image</label>                             
                            <input class="form-control" type="file" name="image" onchange="loadFile(event,'logoImg')"/>
                            <input class="form-control" type="hidden" name="image_old" value="{{ $sliderdtl->image }}"/>
                            @error('image')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                             @if ($sliderdtl->image != null)
                                <img src="{{ asset('storage/uploads/sliders/'.$sliderdtl->image) }}" id="logoImg" style="width: 80px; height: auto;">
                            @else
                                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">
                            @endif                            
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="alt"> Alt</label>
                            <input class="form-control" type="text" placeholder="Enter  alt text" id="alt" name="alt" value="{{ old('alt', $sliderdtl->alt) }}"/>
                            @error('alt')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror                                  
                        </div>                        
                        <div class="form-group col-md-6">
                            <label class="control-label" for="link_lable">Link Lable </label>
                            <textarea class="form-control" rows="1" placeholder="Enter Lable" id="link_lable" name="link_lable">{{ old('link_lable', $sliderdtl->link_lable) }}</textarea>
                            @error('lable')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div> 
                        <div class="form-group col-md-6">
                            <label class="control-label" for="link">Link</label>
                            <textarea class="form-control" rows="1" placeholder="Enter Button Link" id="link" name="link">{{ old('link', $sliderdtl->link) }}</textarea>
                            @error('link')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>                           
                    </div>  
                </div>                
                <div class="tile-footer">
                    <div class="row d-print-none mt-2">
                        <div class="col-12 text-right">
                            <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update </button>
                        </div>
                    </div>
                </div>    
            </form>  
            @endforeach  
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