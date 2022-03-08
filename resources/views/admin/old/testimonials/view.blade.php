@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-quote-left"></i> {{ $title }}</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.testimonials') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Testimonials</a>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <tbody>
                    <tr><th>ID</th><td>{{ $testimonials->id }}</td></tr>
                    <tr> <th>Name</th><td>{{ $testimonials->name }}</td></tr>
                    <tr><th>Image</th>
                        <td>
                            @if ($testimonials->image != null)
                                <img src="{{ asset('storage/uploads/testimonials/'.$testimonials->image) }}" id="logoImg" style="width: 80px; height: auto;">
                            @endif 
                        </td>
                    </tr>
                    <tr><th>Alt</th><td>{{ $testimonials->alt }}</td></tr>
                    <tr><th>Designation</th><td>{{ $testimonials->designation }}</td></tr>                
                    <tr><th>Comment</th><td>{!! $testimonials->comment !!}</td></tr>                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection
