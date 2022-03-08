@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list"></i> {{ $title }}</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.image-categories') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Image Categories</a>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <tbody>
                    <tr><th>ID</th><td>{{ $image_categories->id }}</td></tr>
                    <tr> <th>Name</th><td>{{ $image_categories->name }}</td></tr>
                    <tr><th>Image</th>
                        <td>
                            @if ($image_categories->image_png != null)
                                <img src="{{ asset('storage/uploads/images/categories/'.$image_categories->image_png) }}" id="logoImg" style="width: 80px; height: auto;">
                            @endif 
                        </td>
                    </tr>
                    <tr><th>Slug</th><td>{{ $image_categories->slug }}</td></tr>
                    <tr><th>Alt</th><td>{{ $image_categories->alt }}</td></tr>
                    <tr><th>Parent</th><td>@if(!empty($parent_category)) {{ $parent_category->name }} @endif</td></tr>
                    <tr><th>Other Tag</th><td>@if($image_categories->popular==1) {{ 'Popular,' }}@endif @if($image_categories->banner_search_below==1) {{ ' Banner Search Below' }}@endif </td></tr>
                    <tr><th>Meta Title</th><td>{{ $image_categories->meta_title }}</td></tr>
                    <tr><th>Meta Keywords</th><td>{{ $image_categories->meta_keywords }}</td></tr>                  
                    <tr><th>Meta Descriptipn</th><td>{{ $image_categories->meta_description }}</td></tr>                  
                    <tr><th>Descriptipn</th><td>{!! $image_categories->description !!}</td></tr>                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection
