<!doctype html>
<html>
    <head>
        <title>The Incredibles</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script>

        </script>
        <style>
          
        </style>


        <link rel="apple-touch-icon" sizes="76x76" href="/storage/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/storage/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/storage/images/favicons/favicon-16x16.png">
        <link rel="manifest" href="/storage/images/favicons/site.webmanifest">
        <link rel="mask-icon" href="/storage/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        
    </head>
    <body style="font-family: 'Roboto', sans-serif;">
            <?php if (session()->has('cart')) {
                $cart = session('cart');
                $count = count($cart->getItems());
            } else { $count = 0; } ?>
        <div class="util_menu">
            <ul class="menu">
              @guest
                <li class="nav-item  desktop_util">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item  desktop_util">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                  @if(Auth::user()->isAdmin)
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/home">Dashboard</a>
                    </li>
                  @endif
                  <li class="nav-item dropdown  desktop_util">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->firstName }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>

                           <a class="dropdown-item" href="/profile">
                              {{ __('Profile') }}
                          </a>
                      </div>
                  </li>
              @endguest
              <li class="mhead">
                <img id="open-ham" class="menu-ham" alt="humburgermenu image" src="/storage/images/mobile_menu/hamburger.png">
              </li>
            </ul>
        </div><!-- util_menu -->
        <div class="main_menu">
            <a href="/"><img src="/storage/images/general_images/logo-png2.png" id="logo" alt="the company logo" /></a>
            <ul class="menu">
                <li><a class="main" href="/">Home</a></li>
                <li><a class="main" href="/about">About</a></li>
                <li><a class="main" href="/products">Products</a></li>
                <li><a class="main" href="/faq">FAQ</a></li>
                <li><a class="main" href="/contact">Contact</a></li>

                <li><a href="/cart"><img src="/storage/images/general_images/cart-png.png" class="shopping_cart" alt="shopping cart icon" /><span class="count_items">({{ $count }})</span></a></li>
            </ul>
        </div><!-- main_menu -->

        <!-- mobile_menu -->
        <div class="mobile_menu">
          <div class="close-menu">
            <img id="close-ham" alt="close menu image" src="/storage/images/mobile_menu/close.png">
          </div>
          <ul class="mobile_menu">
              <li class="mobile"><a href="/" class="nav-link mobile_nav">Home</a></li>
              <li class="mobile"><a href="/about" class="nav-link mobile_nav">About</a></li>
              <li class="mobile"><a href="/products" class="nav-link mobile_nav">Products</a></li>
              <li class="mobile"><a href="/faq" class="nav-link mobile_nav">FAQ</a></li>
              <li class="mobile"><a href="/contact" class="nav-link mobile_nav">Contact</a></li>
              <li class="mobile"><a href="/cart" class="nav-link mobile_nav">Cart <span class="count_items">({{ $count }})</span></a></li>
              @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                  @if(Auth::user()->isAdmin)
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/home">Admin Dashboard</a>
                    </li>
                  @endif
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown2" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->firstName }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown2">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form2').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form2" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>

                           <a class="dropdown-item" href="/profile">
                              {{ __('Profile') }}
                          </a>
                      </div>
                  </li>
              @endguest

          </ul>
        </div><!-- mobile_menu -->
        

        @include('partials/flash')
        @include('partials/errors')
        @yield('content')

        <footer>
       
<!--       SOCIAL MEDIA LINKS SET IN LEFT -->
        <div id="social_media">
          FIND US
          <div id="icon">
           
           <a href="#" title="facebook"><img class="social_icon" src="/storage/images/general_images/facebook.png" alt="facebook image"/></a>
            <a href="#" title="twiter"><img class="social_icon" src="/storage/images/general_images/twitter.png" alt="twitter image" /></a>
            <a href="#" title="instagram "> <img class="social_icon" src="/storage/images/general_images/instagram.png" alt="instagram image" /></a>
            <a href="#" title="linked in"><img class="social_icon" src="/storage/images/general_images/link.png" alt="linkedIn Image" /></a>
            <a href="#" title="gmail"><img class="social_icon" src="/storage/images/general_images/gmail.png" alt="gmail image"/></a>
            
            
          </div>
        </div>

        <div id="footer_logo">
          <a href="/"><img src="/storage/images/general_images/logo-png.png" class="home_icon" alt="the logo for the company, The Incredibles" /></a>          
        </div>
       
        <div id="footer_line">
          Incredibles Supplies Phones to Every corner of the world<br/>
          Have a expereince of dealing with Incredibles.
        </div>
        
        <div id="hr">
        </div>
        
        <div style="text-align:center; margin-bottom: 30px;"> 
          <a class="footer_menu" href="/" title="link to home  page ">Home</a> | 
          <a class="footer_menu" href="/about" title="link to about us page ">About</a> | 
          <a class="footer_menu" href="/products" title="link to recipe page ">Products</a> | 
          <a class="footer_menu" href="/terms" title="link to the terms and conditions page ">Terms</a> | 
          <a class="footer_menu" href="/privacy" title="link to contact us page ">Privacy</a> |
          <a class="footer_menu" href="/faq" title="link to frequently asked questions page">FAQs</a> | 
          <a class="footer_menu" href="/contact" title="link to contact us page">Contact</a>
        </div>
        <div id="copyright"> Copyright &copy; Incredibles Terms and conditions applied.
        
          <div id="last_modified" style="margin-top: 20px;">
            

          </div>
        </div>
        
       
      </footer>


    </body>

</html>