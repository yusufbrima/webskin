<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>@yield('title') | {{ config('app.name', 'Monerdaktar') }}</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="" />
	@yield('styles')
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap.min.css')}}">

	<link rel="stylesheet" href="{{ asset('backend/css/waves.min.css')}}" type="text/css" media="all">

	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/feather.css')}}">

	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/switchery.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/themify-icons.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap-tagsinput.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{  asset('backend/css/icofont.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome-n.min.css')}}">


<link rel="stylesheet" type="text/css" href="{{  asset('backend/css/bootstrap-datetimepicker.css') }}">

<link rel="stylesheet" type="text/css" href="{{  asset('backend/css/daterangepicker.css') }}" />

<link rel="stylesheet" type="text/css" href="{{  asset('backend/css/datedropper.min.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/jquery.steps.css') }}">

	<link rel="stylesheet" href="{{ asset('backend/css/chartist.css')}}" type="text/css" media="all">

	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/pages.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/widget.css')}}">


</head>
<body>

	<div class="loader-bg">
		<div class="loader-bar"></div>
	</div>

	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			@include('partials.backend.profilenavbar')
			@include('partials.backend.chat')

			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">

					@include('partials.backend.navbar')

					<div class="pcoded-content">
						<div class="page-header card">
							<div class="row align-items-end">
								<div class="col-lg-8">
									<div class="page-header-title">
										<i class="feather icon-home bg-c-blue"></i>
										<div class="d-inline">
											<h5>Dashboard</h5>
											<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="page-header-breadcrumb">
										<ul class=" breadcrumb breadcrumb-title">
											<li class="breadcrumb-item">
												<a href="/dashboard"><i class="feather icon-home"></i></a>
											</li>
											@yield('navigator')
											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">
									<div class="page-body">
										@yield('content')

									</div><!-- End of inner body -->
								</div>
							</div> <!-- End of inner content -->
						</div>
					</div>

					<div id="styleSelector">
					</div>

				</div>
			</div> <!--   End of main content -->
		</div>
	</div>


	@yield('scripts')
	<script data-cfasync="false" src="{{ asset('backend/js/email-decode.min.js') }}"></script>
	<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/jquery.min.js')}}"></script>


	<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/jquery-ui.min.js') }}"></script>
	<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/popper.min.js')}}"></script>
	<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/bootstrap.min.js')}}"></script>

	<script src="{{ asset('backend/js/waves.min.js') }}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

	<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>

	<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ asset('backend/js/modernizr.js') }}"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ asset('backend/js/css-scrollbars.js') }}"></script>
	
	<script type="4b8d8406c7a94518bf4ad3e1-text/javascript" src="{{ asset('backend/jsjs/switchery.min.js') }}"></script>

	<script type="4b8d8406c7a94518bf4ad3e1-text/javascript" src="{{ asset('backend/js/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('backend/js/typeahead.bundle.min.js') }}" type="4b8d8406c7a94518bf4ad3e1-text/javascript') }}"></script>

<script type="4b8d8406c7a94518bf4ad3e1-text/javascript" src="{{ asset('backend/js/bootstrap-maxlength.js') }}"></script>

<script type="4b8d8406c7a94518bf4ad3e1-text/javascript" src="{{ asset('backend/js/swithces.js') }}"></script>

<script type="68ae7bc9ad94ecf639fe0cd7-text/javascript" src="{{ asset('backend/js/moment-with-locales.min.js') }}"></script>
<script type="68ae7bc9ad94ecf639fe0cd7-text/javascript" src="{{ asset('backend/js/bootstrap-datepicker.min.js') }}"></script>
<script type="68ae7bc9ad94ecf639fe0cd7-text/javascript" src="{{ asset('backend/js/bootstrap-datetimepicker.min.js') }}"></script>

<script type="68ae7bc9ad94ecf639fe0cd7-text/javascript" src="{{ asset('backend/js/daterangepicker.js') }}"></script>

<script type="68ae7bc9ad94ecf639fe0cd7-text/javascript" src="{{ asset('backend/js/datedropper.min.js') }}"></script>


	<script src="{{ asset('backend/js/jquery.cookie.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript') }}"></script>

	<script src="{{ asset('backend/js/jquery.flot.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
	<script src="{{ asset('backend/js/jquery.flot.categories.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
	<script src="{{ asset('backend/js/curvedlines.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
	<script src="{{ asset('backend/js/jquery.flot.tooltip.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

	<script src="{{ asset('backend/js/chartist.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

	<script src="{{ asset('backend/js/amcharts.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
	<script src="{{ asset('backend/js/serial.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
	<script src="{{ asset('backend/js/light.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
	<script type="9fef68816305b81b29a5d613-text/javascript" src="{{ asset('backend/js/validate.js') }}"></script>
	<script src="{{ asset('backend/js/jquery.steps.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>

	<script src="{{ asset('backend/js/jquery.validate.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>

<script src="{{ asset('backend/js/underscore-min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
	
	<script src="{{ asset('backend/js/moment.min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>

	<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="{{ asset('backend/js/validate.js') }}"></script>

	<script type="9fef68816305b81b29a5d613-text/javascript" src="{{ asset('backend/js/form-validation.js') }}"></script>

	<script src="{{ asset('backend/js/inputmask.js')}}" type="194b2c15ad5fc76bc147c8bd-text/javascript"></script>
	<script src="{{ asset('backend/js/jquery.inputmask.js')}}" type="194b2c15ad5fc76bc147c8bd-text/javascript"></script>
	<script src="{{ asset('backend/js/autonumeric.js')}}" type="194b2c15ad5fc76bc147c8bd-text/javascript"></script>
	<script src="{{ asset('backend/js/form-mask.js')}}" type="194b2c15ad5fc76bc147c8bd-text/javascript"></script>


	<script src="{{ asset('backend/js/pcoded.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
	<script src="{{ asset('backend/js/form-wizard.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>



	<script src="{{ asset('backend/js/vertical-layout.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
	<script src="{{ asset('backend/js/jquery.mcustomscrollbar.concat.min.js') }}" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>

	<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/custom-dashboard.min.js')}}"></script>
	<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/script.min.js')}}"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
	<script type="d2d1d6e2f87cbebdf4013b26-text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script src="{{ asset('backend/js/rocket-loader.min.js')}}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script></body>

	</html>
