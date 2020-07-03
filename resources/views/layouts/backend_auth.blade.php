<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>@yield('title') | {{ config('app.name', 'Monerdaktar') }} </title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
  <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
  <meta name="author" content="colorlib" />
@yield('styles')
  <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="backend/css/waves.min.css" type="text/css" media="all"> <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/feather.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/themify-icons.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/icofont.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}"><link rel="stylesheet" type="text/css" href="{{ asset('backend/css/pages.css') }}">
</head>
<body themebg-pattern="theme1">

	<div class="theme-loader">
		<div class="loader-track">
			<div class="preloader-wrapper">
				<div class="spinner-layer spinner-blue">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
				<div class="spinner-layer spinner-red">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
				<div class="spinner-layer spinner-yellow">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
				<div class="spinner-layer spinner-green">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

  @yield('content')
@yield('scripts')
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('backend/js/jquery.min.js') }}"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('backend/js/jquery-ui.min.js') }}"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('backend/js/popper.min.js') }}"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('backend/js/waves.min.js') }}" type="4878d7dfa7bc22a8dfa99416-text/javascript"></script>

<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>

<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('backend/js/modernizr.js') }}"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('backend/js/css-scrollbars.js') }}"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('backend/js/common-pages.js') }}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="4878d7dfa7bc22a8dfa99416-text/javascript"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript">
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>
<script src="{{ asset('backend/js/rocket-loader.min.js') }}" data-cf-settings="4878d7dfa7bc22a8dfa99416-|49" defer=""></script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->
</html>
