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
          <li class="nav-item ">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/about">About Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/services">Services</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/contact">Contact Us</a>
          </li>

          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Account</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                @endif
            
              </div>
            </li>
            @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('doctors.create') }}">Add Doctor</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>