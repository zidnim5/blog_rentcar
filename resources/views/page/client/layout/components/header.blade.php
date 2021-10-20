<header id="header" class="fixed-top d-flex align-items-center">
     <div class="container d-flex align-items-center">
       <h1 class="logo me-auto"><a href="/">{{config('app.name')}}<span>.</span></a></h1>
       <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->
 
       <nav id="navbar" class="navbar order-last order-lg-0">
         <ul>
           <li><a class="nav-link" active-class="active" href="/">Home</a></li>
           <li><a class="nav-link" active-class="active" href='/car'>@lang('dashboard.car')</a></li>
           <li><a class="nav-link" active-class="active" href='/galery'>@lang('dashboard.galery')</a></li>
           <li><a class="nav-link" active-class="active" href="/contact">@lang('dashboard.contact')</a></li>
         </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
       </nav><!-- .navbar -->
       <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
     </div>
  </header>