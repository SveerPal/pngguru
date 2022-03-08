@extends('layouts.app')
@section('title') {{ 'Verify Email' }}@endsection
@section('meta_keywords') {{ 'Verify Email' }}@endsection
@section('meta_description') {{ 'Verify Email' }}@endsection
@section('ogsection') 

<meta property="og:image" content="{{ asset('frontend/assets/images/logo.png') }}" />
<meta property="og:title" content="{{ 'Verify Email'  }}" />
<meta property="og:description" content="{{ 'Verify Email'  }}" />
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
<section class="png-sec pages bg-white">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-title-inner">
               <h2 class="text-uppercase">Verify Email</h2>
               <h5></h5>
            </div>
         </div>
         <div class="bg-light p-5 rounded">
        <h1>Dashboard</h1>
        
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                A fresh verification link has been sent to your email address.
            </div>
        @endif

        Before proceeding, please check your email for a verification link. If you did not receive the email,
        <form action="{{ route('verification.send') }}" method="POST" class="d-inlinee">
            @csrf
            <button type="submit" class="d-inline btn btn-primary p-2 mt-2">
                click here to request another
            </button>.
        </form>
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

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    
    $(document).ready(function(){
	$('#contactForm').submit(function(e){
		e.preventDefault();
		$.ajax({
		  	type:'post',
		  	url:"{{ route('contactus') }}",
		  	data:$(this).serialize(),
		  	dataType:'json',
		  	success:function(data){
		  	    	
		  		if(data.sts==1){
					$('#contactForm')[0].reset();		                       
					Swal.fire({
					  title: 'Thank You',
		                          html:'Thank You for your message.We will contact you soon',				  
					  icon: 'success',
					  showCancelButton: false,
					  confirmButtonColor: '#024298',					  
					  confirmButtonText: 'Ok',					  
					})
		            
		  		}else{
					var err=Array();
					$.each(data.errors, function (key, val) {
					      err.push('<div class="alert alert-danger" role="alert"><b>'+val[0]+'!</b></div>');   
					});        
		  			Swal.fire({
					      icon: 'error',
					      title: 'Validation Error...!',
					      html: err,
					      footer: '<!--<a href="mailto:admin2@admin.com">Why do I have this issue?</a>-->'
					    })
		  		}
		  	},
		  	error: function(requestObject, error, errorThrown) {
		  	    Swal.fire({
		              type: 'error',
		              title: 'Oops...',
		              text: 'Something went wrong!'+errorThrown,
		              footer: '<a href="mailto:admin2@admin.com">Why do I have this issue?</a>'
		            })
		         //swal("Error!",errorThrown , "error");
			
		    }
		});
		return false;
        })

    })
</script>
@endsection
