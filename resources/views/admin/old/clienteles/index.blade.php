@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user"></i> {{ $title }}</h1>
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
            <a href="{{ route('admin.clienteles.create') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Add Clientele</a>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Alt</th>
                    <th>Link</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach($clienteles as $clientele)
                    <tr>
                        <td>{{ $clientele->id }}</td>
                        <td>{{ $clientele->name }}</td>
                        <td>
                            @if ($clientele->image != null)
                                <img src="{{ asset('storage/uploads/clienteles/'.$clientele->image) }}" id="logoImg" style="width: 80px; height: auto;">
                            @endif  
                        </td>
                        <td>{{ $clientele->alt }}</td>
                        <td>{{ $clientele->link }}</td>
                        <td>
                            <!-- <a href="{{ route('admin.clienteles.show',['id'=>$clientele->id]) }}" class="btn btn-primary text-white" type="button">View</a> -->
                            <a href="{{ route('admin.clienteles.edit',['id'=>$clientele->id]) }}" class="btn btn-secondary text-white" type="button">Edit</a>
                            <a href="{{ route('admin.clienteles.delete',['id'=>$clientele->id]) }}" class="btn btn-danger text-white" type="button">Delete</a>
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
