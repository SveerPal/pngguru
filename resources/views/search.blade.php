@extends('layouts.app')
@section('title') {{ 'Search For ' .$query  }}@endsection
@section('meta_keywords') {{ 'Search For ' .$query }}@endsection
@section('meta_description') {{ 'Search For ' .$query }}@endsection

@section('ogsection') 

<meta property="og:image" content="{{ asset('frontend/assets/images/logo.png') }}" />
<meta property="og:title" content="{{ $query  }}" />
<meta property="og:description" content="{{ $query  }}" />
@endsection
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
<!-- PNG IMAGES sec start here -->
<section class="png-sec categorylist bg-white">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-title-inner">
               <h2 class="text-uppercase">Search</h2>
               <h5>For: {{ $query }}</h5>
            </div>
         </div>
         @if(count($images) > 0 )
            @foreach($images as $image)
                <div class="col-lg-3 col-md-6">
                    <div class="single-png-img">
                          <div class="png-img-wrp">
			@if ($image->image_webp != null)
                            <img src="{{ asset('storage/uploads/images/'.$image->image_webp) }}" alt="{{ $image->alt }}" width="288" height="288">
                        @else
                             <img src="{{ asset('frontend/assets/images/png-img-1.jpg') }}" width="288" height="288">
                        @endif
                             
                             <div class="view-overlay">
                                       <a href="{{ route('image.show',['slug'=>$image->slug]) }}">View</a>
                             </div>
                          </div>
                       <div class="png-img-name">
                          <h4><a href="{{ route('image.show',['slug'=>$image->slug]) }}">{{ $image->name }}</a></h4>
                       </div>
                    </div>
                </div>
            @endforeach 
         @else
            <div class="alert alert-warning" role="alert">
              Oops! there is no image in <a href="javascript:void(0)" class="alert-link">{{ $query }}</a>.
            </div>
         @endif
         <div class="col-md-12">
            <div class="view-btn pagination">
                {{ $images->links('vendor.pagination.custom') }}
            </div>
         </div>
      </div>
   </div>
</section>
<!-- PNG IMAGES sec end  here -->

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
