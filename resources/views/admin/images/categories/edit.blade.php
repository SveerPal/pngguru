@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> {{ $title }}</h1>
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
            <a href="{{ route('admin.image-categories') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Image Categories</a>
            @foreach($image_categoriesdetail as $image_catdetail)
            <form action="{{ route('admin.image-categories.update',['id'=>$image_catdetail->id]) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf                
                <div class="tile">  
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="site_name"> Name</label>
                            <input class="form-control" type="text" placeholder="Enter  name" id="name" name="name" value="{{ old('name', $image_catdetail->name) }}"/>
                            @error('name')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror                                  
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="slug">Slug</label>
                            <input class="form-control" type="text" placeholder="Enter Slug" id="slug" name="slug" value="{{ old('slug', $image_catdetail->slug) }}"/>
                            @error('slug')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="Parent"> Parent</label>
                            <select class="form-control" id="parent" name="parent" value="{{ old('parent') }}"/>
                                <option value="">Select Parent</option>
                                @foreach($parentImage_categories as $image_category)                                
                                    <option @if ($image_category->id==$image_catdetail->parent_id) selected="selected" @endif value="{{ $image_category->id }}">{{ $image_category->name }}</option>
                                @endforeach 
                            </select>
                            @error('parent')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--<div class="form-group col-md-5">
                            <label class="control-label">Banner</label>                             
                            <input class="form-control" type="file" name="banner" onchange="loadFile(event,'logoImg')"/>
                            <input class="form-control" type="hidden" name="banner_old" value="{{ $image_catdetail->banner }}"/>
                            @error('banner')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                            @if ($image_catdetail->banner != null)
                                <img src="{{ asset('storage/uploads/images/categories'.$image_catdetail->banner) }}" id="logoImg" style="width: 80px; height: auto;">
                            @else
                                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">
                            @endif                
                        </div>
                        <div class="form-group col-md-5">
                            <label class="control-label">Image JPG</label>                             
                            <input class="form-control" type="file" name="image_jpg" onchange="loadFile(event,'image_jpg')"/>
                            <input class="form-control" type="hidden" name="image_jpg_old" value="{{ $image_catdetail->image_jpg }}"/>
                            @error('image_jpg')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                            @if ($image_catdetail->image_jpg != null)
                                <img src="{{ asset('storage/uploads/images/categories/'.$image_catdetail->image_jpg) }}" id="image_jpg" style="width: 80px; height: auto;">
                            @else
                                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="image_jpg" style="width: 80px; height: auto;">
                            @endif                
                        </div>-->
                        <div class="form-group col-md-5">
                            <label class="control-label">Image PNG</label>                             
                            <input class="form-control" type="file" name="image_png" onchange="loadFile(event,'image_png')"/>
                            <input class="form-control" type="hidden" name="image_png_old" value="{{ $image_catdetail->image_png }}"/>
                            @error('image_png')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                            @if ($image_catdetail->image_png != null)
                                <img src="{{ asset('storage/uploads/images/categories/'.$image_catdetail->image_png) }}" id="image_png" style="width: 80px; height: auto;">
                            @else
                                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="image_png" style="width: 80px; height: auto;">
                            @endif                
                        </div>                        
                        <div class="form-group col-md-5">
                            <label class="control-label">Image WEBP</label>                             
                            <input class="form-control" type="file" name="image_webp" onchange="loadFile(event,'image_webp')"/>
                            <input class="form-control" type="hidden" name="image_webp_old" value="{{ $image_catdetail->image_webp }}"/>
                            @error('image_webp')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-1">
                            @if ($image_catdetail->image_webp != null)
                                <img src="{{ asset('storage/uploads/images/categories/'.$image_catdetail->image_webp) }}" id="image_webp" style="width: 80px; height: auto;">
                            @else
                                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="image_webp" style="width: 80px; height: auto;">
                            @endif                
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="alt"> Alt</label>
                            <input class="form-control" type="text" placeholder="Enter  alt" id="alt" name="alt" value="{{ old('alt', $image_catdetail->alt) }}"/>
                            @error('alt')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror                                  
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label" for="description">Description</label>
                            <textarea class="form-control" rows="4" placeholder="Enter  description" id="description"
                                name="description" >{{ old('description', $image_catdetail->description) }}</textarea>
                            @error('description')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror    
                        </div>
                        <div class="form-group col-md-12">
                            <div class="form-group">
                                <div class="form-check">
                                   <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" id="banner_search_below" name="banner_search_below" value="1" {{ ($image_catdetail->banner_search_below=='1')? "checked" : "" }}/>Banner Search Below
                                   </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                   <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" id="popular" name="popular" value="1" {{ ($image_catdetail->popular=='1')? "checked" : "" }}/>Popular
                                   </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="meta_title">Meta Title</label>
                            <textarea class="form-control" rows="1" placeholder="Enter Meta Title" id="meta_title" name="meta_title">{{ old('meta_title', $image_catdetail->meta_title) }}</textarea>
                            @error('meta_title')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="meta_keywords">Meta Keywords</label>
                            <textarea class="form-control" rows="1" placeholder="Enter seo meta keywords for store" id="meta_keywords" name="meta_keywords" >{{ old('meta_keywords', $image_catdetail->meta_keywords) }}</textarea>
                            @error('meta_keywords')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror    
                        </div> 
                        <div class="form-group col-md-6">
                            <label class="control-label" for="meta_description">Meta Description</label>
                            <textarea class="form-control" rows="4" placeholder="Enter seo meta description for store" id="meta_description" name="meta_description" >{{ old('meta_description', $image_catdetail->meta_description) }}</textarea>
                            @error('meta_description')
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