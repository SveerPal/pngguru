@extends('admin.app')

@section('title') {{ $title }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-users"></i> {{ $title }}</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.users') }}" class="btn btn-primary text-white mr-1 mb-4" type="button">Back To Users</a>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <tbody>
                    <tr><th>ID</th><td>{{ $users->id }}</td></tr>
                    <tr> <th>Profile</th><td> @if ($users->profile != null)
                                <img src="{{ asset('storage/uploads/users/'.$users->profile) }}" id="logoImg" style="width: 80px; height: auto;">
                            @else
                                <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">
                            @endif</td></tr>                    
                    <tr> <th>Name</th><td>{{ $users->name }}</td></tr>                    
                    <tr><th>Email</th><td>{{ $users->email }}</td></tr>
                    <tr><th>Phone</th><td>{{ $users->phone }}</td></tr>
                    <tr><th>Avatar</th><td>@if ($users->avatar != null)<img src="{{ $users->avatar }}" id="logoImg" style="width: 80px; height: auto;">@endif</td></tr>
                    <tr><th>Provider</th><td>{{ $users->provider }}</td></tr>
                    <tr><th>Provider id</th><td>{{ $users->provider_id }}</td></tr>
                    <tr><th>Access Token</th><td>{{ $users->access_token }}</td></tr>
                    <tr><th>Address</th><td>{{ $users->address }}</td></tr>                  
                    <tr><th>City</th><td>{{ $users->city }}</td></tr>                  
                    <tr><th>State</th><td>{{ $users->state }}</td></tr>                  
                    <tr><th>Country</th><td>{{ $users->country }}</td></tr>                  
                    <tr><th>Zipcode</th><td>{{ $users->zipcode }}</td></tr>                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection
