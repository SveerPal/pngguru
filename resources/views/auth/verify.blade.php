@extends('layouts.app')

@section('content')
 <!-- inner search sec start here -->
      <section class="inner-search">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="inner-search-box">
                     <div class="search-box">
                        <form method="get" action="{{ route('search.list') }}">
                             <div class="banner-search-wrapper">
                             <div class="mb-3">
                               <div class="input-group-prepend">
                                   <input type="text" class="form-control" name="q" placeholder="Search PNG Images HD">
                                </div>
                             </div>
                                <div class="select-custom bg-white">
                                    <select id="category" name="cat">
                                        <option value="">All Categories</option>
                                        @foreach ($searchcategories as $searchcategory)
                                        <option value="{{ $searchcategory->id }}">- {{ $searchcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="search-btn" type="submit" title="Search"><i class="fas fa-search"></i></button>
                             </div>
                        </form>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- inner search sec end  here -->
<section class="png-sec pages bg-white">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-title-inner">
               <h2 class="text-uppercase">Verify</h2>
               <h5></h5>
            </div>
         </div>
	<div class="container">
	    <div class="row justify-content-center">
		<div class="col-md-8">
		    <div class="card">
		        <div class="card-header">{{ __('Verify Your Email Address') }}</div>

		        <div class="card-body">
		            @if (session('resent'))
		                <div class="alert alert-success" role="alert">
		                    {{ __('A fresh verification link has been sent to your email address.') }}
		                </div>
		            @endif

		            {{ __('Before proceeding, please check your email for a verification link.') }}
		            {{ __('If you did not receive the email') }},
		            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
		                @csrf
		                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
		            </form>
		        </div>
		    </div>
		</div>
	    </div>
	</div>
</div>
   </div>
</section>


<!-- Add space sec start here -->
<section class="add-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="space-text">
          {!! config('settings.ads_script_first'); !!}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Add space sec end  here -->
@endsection
