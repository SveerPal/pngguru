@extends('layouts.app')
@section('title') {{ $categories->meta_title }}@endsection
@section('meta_keywords') {{ $categories->meta_keywords }}@endsection
@section('meta_description') {{ $categories->meta_description }}@endsection



@section('ogsection') 

<meta property="og:image" content="{{ asset('storage/uploads/images/categories/'.$categories->image_webp) }}" />
<meta property="og:title" content="{{ $categories->name }}" />
<meta property="og:description" content="{{ $categories->meta_description }}" />
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
               <h2 class="text-uppercase">{{ $categories->name }}</h2>
               <h5>{!! $categories->description !!}</h5>
            </div>
         </div>
	@if($categories->id==2)
		@php $b=1 @endphp
		 @if(count($images) > 0 )
		    @foreach($images as $image)
			<?php  $w=''; ?>
			 <?php if(($b%4)==0) $w= 45 ;   ?>

			 <?php if(($b%5)==0)   $w=25 ;  ?>
			 <?php if(($b%6)==0)  $w= 35 ;   ?>
		    <div class="col-lg-4 col-md-6" style="width:{{ $w; }}%">
		        <div class="single-png-img">
		            <div class="png-img-wrp">
		                @if ($image->image_webp != null)
		                    <img src="{{ asset('storage/uploads/images/'.$image->image_webp) }}" alt="{{ $image->alt }}" width="100%" height="100%">
		                @else
		                     <img src="{{ asset('frontend/assets/images/back-shape-1.jpg') }}" width="100%" height="100%">
		                @endif
		                <div class="view-overlay"> <a href="{{ route('image.show',['slug'=>$image->slug]) }}">View</a> </div>
		            </div>
		            <div class="png-img-name">
		                <h4><a href="{{ route('image.show',['slug'=>$image->slug]) }}">{{ $image->name}}</a></h4>
		            </div>
		        </div>
		    </div>
			@php $b++;  @endphp
			
		    @endforeach 
		@else
		    <div class="alert alert-warning" role="alert">
		      Oops! there is no image in <a href="{{ route('category.list',['slug'=>$categories->slug]) }}" class="alert-link">{{ $categories->name }}</a> Category
		    </div>
		@endif  
	@else
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
		      Oops! there is no image in <a href="{{ route('category.list',['slug'=>$categories->slug]) }}" class="alert-link">{{ $categories->name }}</a> Category
		    </div>
		 @endif
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
