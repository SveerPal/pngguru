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
               <h2 class="text-uppercase">{{ __('Login') }}</h2>
               <h5></h5>
            </div>
         </div>
		<div class="container">
		    <div class="row justify-content-center">
			<div class="col-md-8">
			    <div class="card">
				<div class="card-header">{{ __('Login') }}</div>
				
				<div class="card-body">
				    <form method="POST" action="{{ route('login') }}">
				        @csrf

				        <div class="form-group row">
				            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

				            <div class="col-md-6">
				                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

				                @error('email')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
				            </div>
				        </div>

				        <div class="form-group row mt-3">
				            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

				            <div class="col-md-6">
				                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

				                @error('password')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
				            </div>
				        </div>

				        <div class="form-group row mt-3">
				            <div class="col-md-6 offset-md-4">
				                <div class="form-check">
				                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

				                    <label class="form-check-label" for="remember">
				                        {{ __('Remember Me') }}
				                    </label>
				                </div>
				            </div>
				        </div>

				        <div class="form-group row mb-0 mt-3">
				            <div class="col-md-8 offset-md-4">
				                <button type="submit" class="btn btn-success">
				                    {{ __('Login') }}
				                </button>

				                @if (Route::has('password.request'))
				                    <a class="btn btn-link" href="{{ route('password.request') }}">
				                        {{ __('Forgot Your Password?') }}
				                    </a>
				                @endif
				            </div>
				        </div>
				    </form>
				    <hr>
				    <div class="col-md-6 offset-md-3">
				        <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary d-block mt-3">Login with Facebook </a>
				        <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger d-block mt-3">Login with Google</a>
				        <!--<a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-info d-block mt-3">Login with Twitter</a>
				        <a href="{{ route('social.oauth', 'github') }}" class="btn btn-dark d-block mt-3">Login with Github</a>-->
				    </div>
				    
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
