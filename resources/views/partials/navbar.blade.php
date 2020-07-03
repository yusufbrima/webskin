<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="/">
        <!-- <img class="logo-default" src="{{ asset('images/logo.png') }}" alt="logo"/> -->
        <!-- <img class="logo-white" src="{{ asset('images/logo-white.png') }}" alt="logo"/> -->
         <h3 class="logo-default" style="color:#000;">{{ config('app.name' ,'NINS') }}</h3>
         <h3 class="logo-white" style="color:#fff;">{{ config('app.name' ,'NINS') }}</h3>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="{{  Request::path()==='/' ? 'nav-item  active' : 'nav-item' }}">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="{{  Request::path()==='/about' ? 'nav-item  active' : 'nav-item' }}">
            <a class="nav-link" href="/about">About Us</a>
          </li>
          <li class="{{  Request::path()==='/services' ? 'nav-item  active' : 'nav-item' }}">
            <a class="nav-link" href="/services">Services</a>
          </li>
          <li class="{{  Request::path()==='/contact' ? 'nav-item  active' : 'nav-item' }}">
            <a class="nav-link" href="/contact">Contact Us</a>
          </li>
          <li class="{{  Request::path()==='/contact' ? 'nav-item dropdown active' : 'nav-item dropdown' }}">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Account</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
            <a class="dropdown-item" href="{{ route('register') }}">Signup</a>
            
              </div>
            </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>