<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  <title>@yield('title') | {{ config('app.name' ,'Monerdaktar') }}</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
  
  @yield('styles')
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
 <!--  <link rel="stylesheet" href="plugins/themefisher-font/style.css"> -->
  <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/style.css') }}">
  <!-- bootstrap.min css -->
 <!--  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Lightbox.min css -->
  <!-- <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css"> -->
  <link rel="stylesheet" href="{{ asset('plugins/lightbox2/dist/css/lightbox.min.css') }}">
  <!-- animation css -->
  <!-- <link rel="stylesheet" href="plugins/animate/animate.css"> -->
   <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
  <!-- Slick Carousel -->
  <!-- <link rel="stylesheet" href="plugins/slick/slick.css"> -->
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
  <!-- Main Stylesheet -->
<!--   <link rel="stylesheet" href="css/style.css">  --> 
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  
</head>

<body id="body" class="no-box-sizing">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
 @include('partials.navbar')
<!--
End Fixed Navigation
==================================== -->
@yield('call2action')


@yield('slider')


<div class="container">
  @include('partials.messages')
	@yield('content')
</div>

@include('partials.footer')


    <!-- end Footer Area
    ========================================== -->
    

@yield('scripts')
   <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwjwXyzJQDoJybPV5WhEOedL0QFbNHj4"></script>
    <script  src="{{ asset('plugins/google-map/gmap.js')}}"></script>

    <!-- Form Validation -->
    <script src="{{ asset('plugins/form-validation/jquery.form.js') }}"></script> 
    <script src="{{ asset('plugins/form-validation/jquery.validate.min.js') }}"></script>
    
    <!-- Bootstrap4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
    <!-- lightbox -->
    <script src="{{ asset('plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('plugins/slick/slick.min.js')}}"></script>
    <!-- filter -->
    <script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <!-- Smooth Scroll js -->
    <script src="{{ asset('plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('js/script.js')}}"></script>
  
  </body>
  </html>
