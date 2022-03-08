@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-cogs"></i> {{ $title }}</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.pages') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Pages</a>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <tbody>
                    <tr><th>ID</th><td>{{ $pages->id }}</td></tr>
                    <tr> <th>Name</th><td>{{ $pages->name }}</td></tr>
                    <tr><th>Banner</th>
                        <td>
                            @if ($pages->banner != null)
                                <img src="{{ asset('storage/uploads/banner/'.$pages->banner) }}" id="logoImg" style="width: 80px; height: auto;">
                            @endif 
                        </td>
                    </tr>
                    <tr><th>Slug</th><td>{{ $pages->slug }}</td></tr>
                    <tr><th>Parent</th><td>{{ $pages->parent }}</td></tr>
                    <tr><th>Meta Title</th><td>{{ $pages->meta_title }}</td></tr>                  
                    <tr><th>Meta Descriptipn</th><td>{{ $pages->meta_description }}</td></tr>                  
                    <tr><th>Descriptipn</th><td>{!! $pages->description !!}</td></tr>                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection
