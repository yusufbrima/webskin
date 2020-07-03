@extends('layouts.backend')
@section('title')
Starter Page
@endsection
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/introjs.css') }}">
@endsection
@section('navigator')
<li class="breadcrumb-item"><a href="/blank">Tour</a> </li>
@endsection
@section('content')
<div class="row">
	<div class="col-sm-12">

		<div class="card">
			<div class="card-header">
				<h5>Section 1</h5>
				<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
			</div>
			<div class="card-block" data-intro="This is Card body" data-step="2" data-hint="Hello step osne!">
				<p>Use code inside div element <code data-intro="This is Card Header" data-step="1" data-hint="Hello step one!">data-intro="This is Card Header"
				data-step="1"</code> to create tour.</p>
				<p>
					"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
					survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."
				</p>
			</div>
		</div>

	</div>
	<div class="col-sm-6">

		<div class="card">
			<div class="card-header">
				<h5>Section 2</h5>
				<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
			</div>
			<div class="card-block" data-intro="This is Card body" data-step="3" data-hint="Hello step osne!">
				<p>
					"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
					survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."
				</p>
			</div>
		</div>

	</div>
	<div class="col-sm-6">

		<div class="card">
			<div class="card-header">
				<h5>Section 3</h5>
				<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
			</div>
			<div class="card-block" data-intro="This is Card body" data-step="4" data-hint="Hello step osne!">
				<p>
					"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
					survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."
				</p>
			</div>
		</div>

	</div>
	<div class="col-sm-4">

		<div class="card button-page">
			<div class="card-header">
				<h5>Button</h5>
				<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
			</div>
			<div class="card-block">
				<ul>
					<li>
						<button class="btn btn-primary">Primary Button</button>
					</li>
					<li>
						<button class="btn btn-success">Success Button</button>
					</li>
					<li>
						<button class="btn btn-info">Info Button</button>
					</li>
					<li>
						<button class="btn btn-warning">Warning Button</button>
					</li>
				</ul>
			</div>
		</div>

	</div>
	<div class="col-sm-4">

		<div class="card button-page">
			<div class="card-header" data-intro="This is Card Header" data-step="6" data-hint="Hello step osne!">
				<h5>Rounded Button</h5>
				<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
			</div>
			<div class="card-block">
				<ul>
					<li>
						<button class="btn btn-primary btn-round">Primary Button
						</button>
					</li>
					<li>
						<button class="btn btn-success btn-round">Success Button
						</button>
					</li>
					<li>
						<button class="btn btn-info btn-round">Info Button</button>
					</li>
					<li>
						<button class="btn btn-warning btn-round">Warning Button
						</button>
					</li>
				</ul>
			</div>
		</div>

	</div>
	<div class="col-sm-4">

		<div class="card button-page">
			<div class="card-header">
				<h5>Square Button</h5>
				<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
			</div>
			<div class="card-block" data-intro="This is Card body" data-step="7" data-hint="Hello step osne!">
				<ul>
					<li>
						<button class="btn btn-primary btn-square">Primary Button
						</button>
					</li>
					<li>
						<button class="btn btn-success btn-square">Success Button
						</button>
					</li>
					<li>
						<button class="btn btn-info btn-square">Info Button</button>
					</li>
					<li>
						<button class="btn btn-warning btn-square">Warning Button
						</button>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>

@endsection

<script type="2edbebefe5234d0f11cd63d0-text/javascript" src="{{ asset('backend/js/jquery.min.js') }}"></script>
<script type="2edbebefe5234d0f11cd63d0-text/javascript" src="{{ asset('backend/js/jquery-ui.min.js') }}"></script>
<script type="2edbebefe5234d0f11cd63d0-text/javascript" src="{{ asset('backend/js/popper.min.js') }}"></script>
<script type="2edbebefe5234d0f11cd63d0-text/javascript" src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('backend/js/waves.min.js') }}" type="2edbebefe5234d0f11cd63d0-text/javascript"></script>

<script type="2edbebefe5234d0f11cd63d0-text/javascript" src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>

<script type="2edbebefe5234d0f11cd63d0-text/javascript" src="{{ asset('backend/js/modernizr.js') }}"></script>
<script type="2edbebefe5234d0f11cd63d0-text/javascript" src="{{ asset('backend/js/css-scrollbars.js') }}"></script>

<script type="2edbebefe5234d0f11cd63d0-text/javascript" src="{{ asset('backend/js/intro.js') }}"></script>
<script src="{{ asset('backend/js/pcoded.min.js') }}" type="2edbebefe5234d0f11cd63d0-text/javascript"></script>
<script src="{{ asset('backend/js/vertical-layout.min.js') }}" type="2edbebefe5234d0f11cd63d0-text/javascript"></script>
<script src="{{ asset('backend/js/jquery.mcustomscrollbar.concat.min.js') }}" type="2edbebefe5234d0f11cd63d0-text/javascript"></script>
<script type="2edbebefe5234d0f11cd63d0-text/javascript">
	introJs().start();
</script>

<script type="2edbebefe5234d0f11cd63d0-text/javascript" src="{{ asset('backend/js/script.js') }}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="2edbebefe5234d0f11cd63d0-text/javascript"></script>
<script type="2edbebefe5234d0f11cd63d0-text/javascript">
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>
<script src="{{ asset('backend/js/rocket-loader.min.js') }}" data-cf-settings="2edbebefe5234d0f11cd63d0-|49" defer=""></script>