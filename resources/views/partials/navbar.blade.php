<header class="top-header">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="main-nav">
                   <nav class="navbar navbar-expand-lg navbar-light">
                       <a class="navbar-brand" href="{{ url('/'); }}">
                         <img src="{{ asset('frontend/assets/images/logo.png') }}">
                       </a>
                       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggle-icon">
                              <span class="line"></span>
                              <span class="line"></span>
                              <span class="line"></span>
                            </span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                @foreach($navbarcategory as $item)
                    			@if($item->children->count() > 0)
                    			   <li class="nav-item dropdown">
                    				<a href="#" class="nav-link">{{$item->name}}</a>
                    					<ul class="sub-menu">
                    						@foreach($item->children as $submenu)
                    						<li><a href="{{ route('category.list',['slug'=>$submenu->slug]) }}"> {{ $submenu->name }}</a></li>
                    						@endforeach
                    					</ul>
                    				</li>
                    			 @else
                    				<li class="nav-item"><a class="nav-link" href="{{ route('category.list',['slug'=>$item->slug]) }}">{{$item->name}}</a></li>
                    			 @endif
                    		    @endforeach
                                
                            </ul>
                         
                         <ul class="d-flex">
                            <li class="nav-item language">
                               <a class="nav-link" href="javascript:void(0)"><i class="fas fa-language"></i><div id="google_translate_element"></div> </a>
                            </li>
                            <!--<li class="nav-item">
                               <a class="nav-link" href="#"><i class="fas fa-dollar-sign"></i> Donates</a>
                            </li>-->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" id="loginpopupbtn" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-user"></i> {{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" id="registerpopupbtn" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#registerModal"><i class="fas fa-lock"></i> {{ __('Sign up') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    
                                </ul>
                            </li>
                            @endguest
                             
                         </ul>
                       </div>
                   </nav>
                </div>
             </div>
          </div>
       </div>
    </header>
