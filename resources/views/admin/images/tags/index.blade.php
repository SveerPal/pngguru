@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $title }}</h1>
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
    
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.image-tags.create') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Add New</a>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Banner</th>
                    <th>Slug</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach($image_tags as $image_tag)
                    <tr>
                        <td>{{ $image_tag->id }}</td>
                        <td>{{ $image_tag->name }}</td>
                        <td>
                            @if ($image_tag->image_png != null)
                                <img src="{{ asset('storage/uploads/images/tags/'.$image_tag->image_png) }}" id="logoImg" style="width: 80px; height: auto;">
                            @endif  
                        </td>
                        <td>{{ $image_tag->slug }}</td>
                        <td>
                            <a href="{{ route('admin.image-tags.show',['id'=>$image_tag->id]) }}" class="btn btn-primary text-white" type="button"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.image-tags.edit',['id'=>$image_tag->id]) }}" class="btn btn-secondary text-white" type="button"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('admin.image-tags.delete',['id'=>$image_tag->id]) }}" class="btn btn-danger text-white" type="button"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>  
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
