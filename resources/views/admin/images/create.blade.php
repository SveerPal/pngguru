@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-image"></i> {{ $title }}</h1>
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
            <a href="{{ route('admin.images') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Images</a>
            <form action="{{ route('admin.images.store') }}" method="POST" role="form" enctype="multipart/form-data">
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
                            <label class="control-label" for="image_category_id"> Image Category</label>

                            <select class="form-control" id="image_category_id" name="image_category_id[]"  multiple="multiple" />
                                <option value="">Select Category</option>
                                @foreach($image_categories as $image_category)     
					<option value="{{ $image_category->id }}" {{ (collect(old('image_category_id'))->contains($image_category->id)) ? 'selected':'' }}>{{ $image_category->name }} </option>                                                    
 					 @if($image_category->children->count() > 0)                    			  
    						@foreach($image_category->children as $subcate)
						<option value="{{ $subcate->id }}" {{ (collect(old('image_category_id'))->contains($subcate->id)) ? 'selected':'' }}>--{{ $subcate->name }}</option>
    						@endforeach                    					
                    			 	
                    			 @endif                                    
				   
                                @endforeach 
                            </select>
                            @error('image_category_id')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="image_tag_id"> Image Tag</label>
                            <select class="form-control" id="image_tag_id" name="image_tag_id[]"  multiple="multiple" />
                                <option value="">Select Tag</option>
                                @foreach($image_tags as $image_tag)                                
                                    <option value="{{ $image_tag->id }}" {{ (collect(old('image_tag_id'))->contains($image_tag->id)) ? 'selected':'' }}>{{ $image_tag->name }}</option>
                                @endforeach 
                            </select>
                            @error('image_tag_id')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--<div class="form-group col-md-5">
                            <label class="control-label">Banner</label>                             
                            <input class="form-control" type="file" name="banner" onchange="loadFile(event,'logoImg')"/>
                            @error('banner')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                             <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">                            
                        </div>
                        <div class="form-group col-md-5">
                            <label class="control-label">Image JPG</label>                             
                            <input class="form-control" type="file" name="image_jpg" onchange="loadFile(event,'image_jpg')"/>
                            @error('image_jpg')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                             <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="image_jpg" style="width: 80px; height: auto;">                            
                        </div>-->
                        <div class="form-group col-md-5">
                            <label class="control-label">Image PNG</label>                             
                            <input class="form-control" type="file" name="image_png" onchange="loadFile(event,'image_png')"/>
                            @error('image_png')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                             <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="image_png" style="width: 80px; height: auto;">                            
                        </div>                                                
                        <div class="form-group col-md-5">
                            <label class="control-label">Image WEBP</label>                             
                            <input class="form-control" type="file" name="image_webp" onchange="loadFile(event,'image_webp')"/>
                            @error('image_webp')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                             <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="image_webp" style="width: 80px; height: auto;">                            
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="alt"> Alt</label>
                            <input class="form-control" type="text" placeholder="Enter  alt text" id="alt" name="alt" value="{{ old('alt') }}"/>
                            @error('alt')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror                                  
                        </div>
			<div class="form-group col-md-6">
                            <label class="control-label" for="alt"> Image Size</label>
                            <input class="form-control" type="text" placeholder="Enter   text" id="alt" name="image_size" value="{{ old('image_size') }}"/>
                            @error('image_size')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror                                  
                        </div>
			<div class="form-group col-md-6">
                            <label class="control-label" for="alt">  File Format</label>
                            <input class="form-control" type="text" placeholder="Enter   text" id="alt" name="file_format" value="{{ old('file_format') }}"/>
                            @error('file_format')
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
                        <div class="form-group col-md-6">
                            <label class="control-label" for="meta_title">Meta Title</label>
                            <textarea class="form-control" rows="1" placeholder="Enter Meta Title" id="meta_title" name="meta_title">{{ old('meta_title') }}</textarea>
                            @error('meta_title')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="meta_keywords">Meta Kaywords</label>
                            <textarea class="form-control" rows="1" placeholder="Enter Meta Kaywords" id="meta_keywords" name="meta_keywords">{{ old('meta_keywords') }}</textarea>
                            @error('meta_keywords')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label" for="meta_description">Meta Description</label>
                            <textarea class="form-control" rows="4" placeholder="Enter seo meta description for store" id="meta_description" name="meta_description" >{{ old('meta_description') }}</textarea>
                            @error('meta_description')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror    
                        </div>                                               
                    </div>  
                </div>
                <div class="tile-footer">
                    <div class="row d-print-none mt-2">
                        <div class="col-12 text-right">
                            <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
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
    <script src="{{ asset('backend/js/plugins/select2.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image_tag_id').select2();
            $('#image_category_id').select2();            
        });
    </script>
     <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
     <script>
            CKEDITOR.replace( 'description' );
        </script>
@endpush
