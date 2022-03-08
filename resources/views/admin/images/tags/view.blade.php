@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $title }}</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.image-tags') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Image Tags</a>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <tbody>
                    <tr><th>ID</th><td>{{ $image_tags->id }}</td></tr>
                    <tr> <th>Name</th><td>{{ $image_tags->name }}</td></tr>
                    <tr><th>Banner</th>
                        <td>
                            @if ($image_tags->image_png != null)
                                <img src="{{ asset('storage/uploads/images/tags/'.$image_tags->image_png) }}" id="logoImg" style="width: 80px; height: auto;">
                            @endif 
                        </td>
                    </tr>
                    <tr><th>Slug</th><td>{{ $image_tags->slug }}</td></tr>
                    <tr><th>Alt</th><td>{{ $image_tags->alt }}</td></tr>                                     
                    <tr><th>Descriptipn</th><td>{!! $image_tags->description !!}</td></tr>    
                    <tr><th>Meta Title</th><td>{{ $image_tags->meta_title }}</td></tr>                  
                    <tr><th>Meta Keywords</th><td>{{ $image_tags->meta_keywords }}</td></tr>                  
                    <tr><th>Meta Descriptipn</th><td>{{ $image_tags->meta_description }}</td></tr>               
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection
