@extends('layouts.app')
@section('title') {{ $images->meta_title }}@endsection
@section('meta_keywords') {{ $images->meta_keywords }}@endsection
@section('meta_description') {{ $images->meta_description }}@endsection
@section('ogsection') 

<meta property="og:image" content="{{ asset('storage/uploads/images/'.$images->image_webp) }}" />
<meta property="og:title" content="{{ $images->name }}" />
<meta property="og:description" content="{{ $images->meta_description }}" />
<meta property="og:url" content="{{ route('image.show',['slug'=>$images->slug]) }}">

<meta name="twitter:site" content="{{ $images->meta_description }}">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $images->name }}">
<meta name="twitter:description" content="{{ $images->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/uploads/images/'.$images->image_webp) }}">





@endsection

{{-- $images->description --}}
@section('content')

<!-- PNG IMAGES sec start here -->
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
      <!-- details aera sec start here -->
      <section class="details-sec">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 col-md-12">
                  <div class="details-left">
                     <div class="img-name">
                        <h2>{{ $images->name }}</h2>
                     </div>
                     <div class="details-images">
                        <figure class="details-img">
                            @if ($images->image_webp != null)
                                <img src="{{ asset('storage/uploads/images/'.$images->image_webp) }}" alt="{{ $images->alt }}" width="746" height="746">
                            @else
                                <img src="{{ asset('frontend/assets/images/I-love-u.jpg') }}" width="746" height="746">
                            @endif  
                        </figure>
                        <div class="details-img-info">
                            <ul>
                                
                            @if(count($categories) > 0 )   
                                <li>
                                <span>Category: </span>
                                @foreach ($categories as $category)
                                    <a href="{{ route('category.list',['slug'=>$category->slug]) }}">{{ $category->name }}</a>
                                    @if($categories->last() !== $category)
                                         ,
                                    @endif

                                @endforeach
                                </li>
                            @endif       
                              <li>
                                  <span>Image Size: {{ $images->image_size }}</span>
                              </li>
                              <li>
                                 <span>File Format :</span>
                                 <a href="javascript:void(0)">{{ $images->file_format }}</a>
                                 
                              </li>
                           </ul>
                        </div>
                        <div class="share-post">
                           <span>Share this:</span>
                          
                         <?php 
                         $share=  Share::currentPage('Share title')->facebook()->twitter()->whatsapp()->linkedin()->getRawLinks();
                         ?>
                           
                           
                           <ul>
                               
                              <li class="pinterest">
                                 <a href="http://pinterest.com/pin/create/bookmarklet/?url={{ route('image.show',['slug'=>$images->slug]) }} &media={{ asset('storage/uploads/images/'.$images->image_webp) }} &description={{ $images->name }}" target="_blank" rel="noopener"><i class="fab fa-pinterest-p"></i></a>
                              </li>
                              <li class="facebook">
                                 <a href="<?php echo $share['facebook']; ?>" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                              </li>
                              <li class="twitter">
                                 <a href="<?php echo $share['twitter']; ?>&text={{ $images->name }}"  target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
                              </li>
                              <li class="facebook">
                                 <a href="<?php echo $share['linkedin']; ?>" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a>
                              </li>
                              <!--<li class="instagram">
                                 <a href="https://www.instagram.com/?url={{ route('image.show',['slug'=>$images->slug]) }}" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                              </li>-->
                              <li class="whatsapp">
                                 <a href="<?php echo $share['whatsapp']; ?>" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
                              </li>
                           </ul>
                        </div>
                        <div class="tags-list">
                           <h4>Tags</h4>
                            <ul>
                            @if(count($tags) > 0 )   
                                @foreach ($tags as $tag)
                                <li>
                                    <a href="{{ route('tag.list',['slug'=>$tag->slug]) }}">{{ $tag->name }}</a>
                                </li>
                                @endforeach
                            @endif  
                           </ul>
                        </div>
                        <div class="row">
                            <div class="images-btn col-md-77">
                               <a href="javascript:void(0)" onclick="downloadcountupdate({{ $images->id }})" ><i class="fas fa-download"></i> Download for Free</a>
                            </div>
                            <!--<div class="donates-btn col-md-5">
                                <a href="#" class="btn-warning" target="_blank"><i class="fas fa-dollar-sign"></i> Donates</a>
                            </div>-->
                        </div>
                     </div>
                     <!--<div class="space-text">
                        {{ config('settings.ads_script_second'); }}
                     </div>-->
                  </div>
               </div>
               <div class="col-lg-5 col-md-12">
                  <div class="details-right">
                     <div class="space-text">
                        {!! config('settings.ads_script_second'); !!}
                     </div>
 
                     <div class="relevent-img">
                        <h2>Similar Images</h2>
                        <div class="row">
                            @if(count($relventimages) > 0 )
                                @foreach($relventimages as $relventimage)
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-png-img">
                                          <div class="png-img-wrp">
                                            @if ($relventimage->image_webp != null)
                                                <img src="{{ asset('storage/uploads/images/'.$relventimage->image_webp) }}" alt="{{ $relventimage->alt }}" width="288" height="288">
                                            @else
                                                 <img src="{{ asset('frontend/assets/images/png-img-1.jpg') }}" width="288" height="288">
                                            @endif
                                             <div class="view-overlay">
                                                       <a href="{{ route('image.show',['slug'=>$relventimage->slug]) }}">View</a>
                                             </div>
                                          </div>
                                       
                                    </div>
                                </div>
                                
                                    <!--<div class="col-lg-4 col-md-6 col-sm-66">
                                        <div class="relevent-img-box">
                                              <a href="{{ route('image.show',['slug'=>$relventimage->slug]) }}">
                                                @if ($relventimage->image_webp != null)
                                                    <img src="{{ asset('storage/uploads/images/'.$relventimage->image_webp) }}" alt="{{ $relventimage->alt }}" width="159" height="180">
                                                @else
                                                     <img src="{{ asset('frontend/assets/images/png-img-1.jpg') }}" width="159" height="180">
                                                @endif
                                              </a>
                                        </div>
                                    </div>-->
                                @endforeach 
                            @endif
                           
                        </div>
                     </div>
                     <div class="space-text">
                        {!! config('settings.ads_script_third'); !!}
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                   <div class="space-text">
                        {!! config('settings.ads_script_fourth'); !!}
                     </div>
                     <div class="similar-images">
                        <div class="row">
                            @if(count($similarimages) > 0 )
                                @foreach($similarimages as $similarimage)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-png-img">
                                              <div class="png-img-wrp">
                                                @if ($similarimage->image_webp != null)
                                                    <img src="{{ asset('storage/uploads/images/'.$similarimage->image_webp) }}" alt="{{ $similarimage->alt }}" width="288" height="288">
                                                @else
                                                     <img src="{{ asset('frontend/assets/images/png-img-4.jpg') }}" width="288" height="288">
                                                @endif
                                                 <div class="view-overlay">
                                                           <a href="{{ route('image.show',['slug'=>$similarimage->slug]) }}">View</a>
                                                 </div>
                                              </div>
                                           <div class="png-img-name">
                                              <h4><a href="{{ route('image.show',['slug'=>$similarimage->slug]) }}">{{ $similarimage->name }}</a></h4>
                                           </div>
                                        </div>
                                    </div>
                                @endforeach 
                            @endif
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </section>
      <!-- details aera sec end  here -->
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    
    function downloadcountupdate(imageid){
	
        $.ajax({
          	type:'get',
          	url:"{{ route('downloadcount',["+imageid+"]) }}",
          	data:{"_token": "{{ csrf_token() }}",imageid:imageid},
          	dataType:'json',
          	success:function(data){
          	    
          		if(data.sts==1){
                               var link= "{{ asset('storage/uploads/images/') }}/"+data.image_png;
				Swal.fire({
				  title: 'Download Now',
                                  html:'Clik on ' +'<a href="'+link+'" target="_blank" download="'+link+'"><b>Download</b></a> ' +'<b>',				  
				  icon: 'success',
				  showCancelButton: false,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'OK',
				  cancelButtonText: 'Not Now',
				  footer:'<div class="space-text"><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3706041156290071" crossorigin="anonymous"><\/script></div>',
				})/*.then((result) => {
				  if (result.isConfirmed) {
				    window.location="http://www.pngguru.in";
				  }
				})*/
                    
          		}else if(data.sts==2){
				//$( "#loginpopupbtn" ).trigger( "click" );
				$( "#loginpopupbtn" )[0].click();
				//jQuery('#loginpopupbtn').trigger('click');
    			}else if (data.sts==3) {
				    window.location=data.verifyurl;
				}else{
          			Swal.fire({
				      type: 'error',
				      title: 'Oops...',
				      text: 'Something went wrong!',
				      footer: '<a href="mailto:{{ config('settings.email') }}">Why do I have this issue?</a>'
				    })
          		}
          	},
          	error: function(requestObject, error, errorThrown) {
          	    Swal.fire({
                      type: 'error',
                      title: 'Oops...',
                      text: 'Something went wrong!',
                      footer: '<a href="mailto:{{ config('settings.email') }}">Why do I have this issue?</a>'
                    })
                 //swal("Error!",errorThrown , "error");
            }
        });
        return false;

    }
</script>
@endsection
