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
               <h2 class="text-uppercase">Confirm</h2>
               <h5></h5>
            </div>
         </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
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
