@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-sliders"></i> {{ $title }}</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.sliders') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Sliders</a>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <tbody>
                    <tr><th>ID</th><td>{{ $sliders->id }}</td></tr>
                    <tr> <th>Name</th><td>{{ $sliders->name }}</td></tr>
                    <tr><th>Image</th>
                        <td>
                            @if ($sliders->image != null)
                                <img src="{{ asset('storage/uploads/sliders/'.$sliders->image) }}" id="logoImg" style="width: 80px; height: auto;">
                            @endif 
                        </td>
                    </tr>
                    <tr><th>Alt</th><td>{{ $sliders->alt }}</td></tr>
                    <tr><th>Heading First</th><td>{{ $sliders->heading_first }}</td></tr>
                    <tr><th>Heading Second</th><td>{{ $sliders->heading_second }}</td></tr>                  
                    <tr><th>Heading Third</th><td>{{ $sliders->heading_third }}</td></tr>                  
                    <tr><th>Button Link</th><td>{{ $sliders->link }}</td></tr>                  
                    <tr><th>Button Lable</th><td>{{ $sliders->link_lable }}</td></tr>                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection
