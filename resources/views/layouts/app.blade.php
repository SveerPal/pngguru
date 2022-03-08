<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">
    @yield('ogsection')
    <link rel="canonical" href="{{url()->current()}}"/>
	
	    <link rel="icon" href="{{ asset('storage/'.config('settings.site_favicon')) }}">
  	    <link rel="shortcut icon" href="{{ asset('storage/'.config('settings.site_favicon')) }}">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
      {!! config('settings.google_analytics') !!}
      {!! config('settings.facebook_pixels') !!}
    <!-- Scripts -->
   <!-- <script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
   <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->

    <!-- Styles -->
   <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
</head>
<body>
    @include('partials.navbar')
    
    
    @yield('content')
     
    <footer class="site-footer">
       <div class="container">
          <div class="row">
             <div class="row">
                <div class="col-lg-4 col-md-6">
                   <div class="footer-widget text-white">
                      <h2>PNG GURU</h2>
                      {!! config('settings.footer_about_text') !!}
                   </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                   <div class="footer-widget">
                      <h2>LEGAL</h2>
                      <ul>
                         <li><a href="{{ route('page',['slug'=>'terms-conditions']) }}">Terms of Service</a></li>
                         <li><a href="{{ route('page',['slug'=>'privacy-policy']) }}">Privacy Policy</a></li>
                         <li><a href="{{ route('page',['slug'=>'contact-us']) }}">Contact Us</a></li>
                         <li><a href="{{ route('page',['slug'=>'dmca']) }}">DMCA</a></li>
                      </ul>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="footer-widget">
                      <h2>FOLLOW US</h2>
                      <ul class="follow-icon">
                         <li><a href="{{ config('settings.social_facebook') }}" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                         <li><a href="{{ config('settings.social_pintrest') }}" target="_blank"><i class="fab fa-pinterest-p"></i> Pinterest</a></li>
                         <li><a href="{{ config('settings.social_twitter') }}" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                         <li><a href="{{ config('settings.social_instagram') }}" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </footer>
    <section class="copy-right">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="copy-right-text">
                   <p>{{ config('settings.footer_copyright_text') }}</p>
                </div>
             </div>
          </div>
       </div>
    </section>
    <div id="back-to-top" class="back-to-top" style="">
       <button class="btn btn-dark" title="Back to Top" style="display: inline-block;">
          <i class="fa fa-angle-up"></i>
       </button>
    </div>
<!-- Footer sec end  here -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
      
        @include('partials.login')
        @include('partials.register')
        @yield('scripts')
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,en,fr,es,de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" defer></script>
</body>
</html>
