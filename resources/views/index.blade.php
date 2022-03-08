@extends('layouts.app')
@section('title') {{ config('settings.seo_meta_title') }}@endsection
@section('meta_keywords') {{ config('settings.seo_meta_keywords') }}@endsection
@section('meta_description') {{ config('settings.seo_meta_description') }}@endsection

@section('ogsection') 

<meta property="og:image" content="{{ asset('frontend/assets/images/logo.png') }}" />
<meta property="og:title" content="{{ config('settings.seo_meta_keywords')  }}" />
<meta property="og:description" content="{{ config('settings.seo_meta_description')  }}" />
@endsection
@section('content')
<!-- Banner sec start here -->
<section class="banner-sec">
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-inner">
       <div class="carousel-item active">
        
        @if ($searchbanners->image != null)
            <img src="{{ asset('storage/uploads/sliders/'.$searchbanners->image) }}" alt="{{ $searchbanners->alt }}" class="d-block w-100">
        @else
            <img src="{{ asset('frontend/assets/images/cover-img.png') }}" class="d-block w-100" alt="">
        @endif 
         <div class="carousel-caption">
            <div class="banner-text">
               <h1> {{ $searchbanners->heading_first }}</h1>
               <p class="text-white"> {{ $searchbanners->heading_second }}</p>
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
                  <div class="fast-search-links">
                     <ul>
                        @foreach ($belowsearchcategories as $belowsearchcategory)
                        <li>
                           <a href="{{ route('category.list',['slug'=>$belowsearchcategory->slug]) }}"><i class="fas fa-search"></i> {{ $belowsearchcategory->name }}</a>
                        </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
         </div>
       </div>
       
     </div>
</div>
</section>
<!-- Banner sec end here  -->
<!-- Popular sec start here -->
<section class="popular-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-title">
               <h2>Popular Albums Collections</h2>
               <h5> Best Categories </h5>
            </div>
         </div>
         <div class="col-md-12">
            <div class="popular-silder">
                <div class="owl-carousel owl-theme" id="popular-silder">
                @if(count($popularcategories) > 0 )   
                   @foreach ($popularcategories as $popularcategory)
                   <div class="item">
                      <div class="single-popular">
                         <div class="popular-img">
                             @if ($popularcategory->image_webp != null)
                                <img src="{{ asset('storage/uploads/images/categories/'.$popularcategory->image_webp) }}" alt="{{ $popularcategory->alt }}" width="241" height="160">
                            @else
                                <img src="{{ asset('frontend/assets/images/Popular-1.jpg') }}" width="241" height="160">
                            @endif  
                            <div class="view-overlay">
                               <a href="{{ route('category.list',['slug'=>$popularcategory->slug]) }}">View</a>
                            </div>
                         </div>
                         <div class="popular-text">
                            <h3><a href="{{ route('category.list',['slug'=>$popularcategory->slug]) }}">{{ $popularcategory->name }}</a></h3>
                         </div>
                      </div>
                   </div>
                    @endforeach
                @else
                    <div class="alert alert-warning" role="alert">
                      Oops! there is no popular Category
                    </div>
                @endif    
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Popular sec end  here -->
<!-- PNG IMAGES sec start here -->
<section class="png-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-title-inner">
               <h2 class="text-uppercase">{{ $pngcategories->name }}</h2>
               <h5>{!! $pngcategories->description !!}</h5>
            </div>
         </div>
         @if(count($pngimages) > 0 )
            @foreach($pngimages as $pngimage)
                <div class="col-lg-3 col-md-6">
                    <div class="single-png-img">
                          <div class="png-img-wrp">
                            @if ($pngimage->image_webp != null)
                                <img src="{{ asset('storage/uploads/images/'.$pngimage->image_webp) }}" alt="{{ $pngimage->alt }}" width="288" height="288">
                            @else
                                 <img src="{{ asset('frontend/assets/images/png-img-1.jpg') }}" width="288" height="288">
                            @endif
                             <div class="view-overlay">
                                       <a href="{{ route('image.show',['slug'=>$pngimage->slug]) }}">View</a>
                             </div>
                          </div>
                       <div class="png-img-name">
                          <h4><a href="{{ route('image.show',['slug'=>$pngimage->slug]) }}">{{ $pngimage->name }}</a></h4>
                       </div>
                    </div>
                </div>
            @endforeach 
         @else
            <div class="alert alert-warning" role="alert">
              Oops! there is no image in <a href="{{ route('category.list',['slug'=>$pngcategories->slug]) }}" class="alert-link">{{ $pngcategories->name }}</a> Category
            </div>
         @endif
         
        
          
         <div class="col-md-12">
            <div class="view-btn">
               <a href="{{ route('category.list',['slug'=>$pngcategories->slug]) }}">View all</a>
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
          {!! config('settings.ads_script_first') ;!!}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Add space sec end  here -->
<!-- background IMAGES sec start here -->
<section class="png-sec background-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-title-inner">
               <h2 class="text-uppercase"> {{ $bgcategories->name }}</h2>
               <h5>{!! $bgcategories->description !!}</h5>
            </div>
         </div>
	@php $b=1 @endphp
         @if(count($backgroundimages) > 0 )
            @foreach($backgroundimages as $backgroundimage)
		<?php  $w=''; ?>
		 <?php if(($b%4)==0) $w= 45 ;   ?>

		 <?php if(($b%5)==0)   $w=25 ;  ?>
		 <?php if(($b%6)==0)  $w= 35 ;   ?>
            <div class="col-lg-4 col-md-6" style="width:{{ $w; }}%">
                <div class="single-png-img">
                    <div class="png-img-wrp">
                        @if ($backgroundimage->image_webp != null)
                            <img src="{{ asset('storage/uploads/images/'.$backgroundimage->image_webp) }}" alt="{{ $backgroundimage->alt }}" width="100%" height="100%">
                        @else
                             <img src="{{ asset('frontend/assets/images/back-shape-1.jpg') }}" width="100%" height="100%">
                        @endif
                        <div class="view-overlay"> <a href="{{ route('image.show',['slug'=>$backgroundimage->slug]) }}">View</a> </div>
                    </div>
                    <div class="png-img-name">
                        <h4><a href="{{ route('image.show',['slug'=>$backgroundimage->slug]) }}">{{ $backgroundimage->name}}</a></h4>
                    </div>
                </div>
            </div>
		@php $b++;  @endphp
		
            @endforeach 
        @else
            <div class="alert alert-warning" role="alert">
              Oops! there is no image in <a href="{{ route('category.list',['slug'=>$bgcategories->slug]) }}" class="alert-link">{{ $bgcategories->name }}</a> Category
            </div>
        @endif     
         <div class="col-md-12">
            <div class="view-btn">
               <a href="{{ route('category.list',['slug'=>$bgcategories->slug]) }}">View all</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- background IMAGES sec end  here -->
<!-- Add space sec start here -->
<section class="add-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="space-text">
          {!! config('settings.ads_script_second'); !!}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Add space sec end  here -->
<!-- PNG IMAGES sec start here -->
<section class="png-sec template-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-title-inner">
               <h2 class="text-uppercase"> {{ $templatecategories->name }}</h2>
               <h5>{!! $templatecategories->description !!}</h5>
            </div>
         </div>
         @if(count($templateimages) > 0 )
            @foreach($templateimages as $templateimage)
            <div class="col-lg-3 col-md-6">
                <div class="single-png-img">
                      <div class="png-img-wrp">
                        @if ($templateimage->image_webp != null)
                            <img src="{{ asset('storage/uploads/images/'.$templateimage->image_webp) }}" alt="{{ $templateimage->alt }}" width="360" height="360">
                        @else
                             <img src="{{ asset('frontend/assets/images/background-1.jpg') }}" width="360" height="360">
                        @endif
                         <div class="view-overlay">
                                   <a href="{{ route('image.show',['slug'=>$templateimage->slug]) }}">View</a>
                         </div>
                      </div>
                   <div class="png-img-name">
                      <h4><a href="{{ route('image.show',['slug'=>$templateimage->slug]) }}">{{ $templateimage->name }}</a></h4>
                   </div>
                </div>
            </div>
            @endforeach 
        @else
            <div class="alert alert-warning" role="alert">
              Oops! there is no image in <a href="{{ route('category.list',['slug'=>$templatecategories->slug]) }}" class="alert-link">{{ $templatecategories->name }}</a> Category
            </div>
        @endif  
         <div class="col-md-12">
            <div class="view-btn">
               <a href="{{ route('category.list',['slug'=>$templatecategories->slug]) }}">View all</a>
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
           {!! config('settings.ads_script_third');!!}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Add space sec end  here -->
@endsection
