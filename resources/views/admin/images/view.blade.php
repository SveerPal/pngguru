@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fas fa-image"></i> {{ $title }}</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.images') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Images</a>
          <div class="tile">
            <div class="tile-body">
               
                   
              <table class="table table-hover table-bordered" id="sampleTable">
                <tbody>
                     @foreach ($images as $images) 
                    <tr><th>ID</th><td>{{ $images->id }}</td></tr>
                    <tr> <th>Name</th><td>{{ $images->name }}</td></tr>
                    <tr><th>Image</th>
                        <td>
                            @if ($images->image_png != null)
                                <img src="{{ asset('storage/uploads/images/'.$images->image_png) }}" id="logoImg" style="width: 80px; height: auto;">
                            @endif 
                        </td>
                    </tr>
                    <tr><th>Slug</th><td>{{ $images->slug }}</td></tr>
                    <tr><th>Alt</th><td>{{ $images->alt }}</td></tr>
		    <tr><th>Image Size</th><td>{{ $images->image_size }}</td></tr>
                    <tr><th>File Format</th><td>{{ $images->file_format }}</td></tr>
                    <tr><th>Descriptipn</th><td>{{!! $images->description !!}}</td></tr>  
                    <tr>
                        <th>Image Category</th>
                        <td> @foreach ($imagescat as $cat)   {{ $cat->name .', '}} @endforeach</td>
                    </tr>
                    <tr>
                        <th>Image Tag</th>
                        <td>@foreach ($imagestag as $tag)   {{ $tag->name .", "}} @endforeach</td>
                    </tr>
                    <tr> <th>Downloads</th><td>{{ $images->download_count }}</td></tr>
                    <tr><th>Meta Title</th><td>{{ $images->meta_title }}</td></tr>                  
                    <tr><th>Meta Descriptipn</th><td>{{ $images->meta_description }}</td></tr>                  
                    <tr><th>Meta Keywords</th><td>{{ $images->meta_keywords }}</td></tr>   
                    @endforeach               
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection
