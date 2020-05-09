@extends('layouts.app')

@section('title')
	Services
@endsection
@section('styles')
@endsection
@section('call2action')
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Our Services</h2>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="/">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Our Services</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</section>
@endsection
@section('content')

<!-- Start Services Section
		==================================== -->
		
<section class="services"  id="services">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="title text-center" >
				<h2 >Our Services</h2>
				<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			@if(count($services))
				@foreach($services as $service)
					@if($service->id % 2 == 0)
						<!-- Single Service Item -->
						<div class="col-md-4 col-sm-6 col-xs-12  no-padding" >
							<div class="service-block  text-center">
							<div class="service-icon text-center">
								<i class="fas fa-hospital-user"></i>
							</div>
							<h3>{{ $service->title }}</h3>
							<p> {{ $service->description }}</p>
						</div>
					</div>
		            <!-- End Single Service Item -->
		            @else
						<!-- Single Service Item -->
						<div class="col-md-4 col-sm-6 col-xs-12  no-padding" >
							<div class="service-block color-bg text-center">
							<div class="service-icon text-center">
								<i class="fas fa-hospital-user"></i>
							</div>
							<h3>{{ $service->title }}</h3>
							<p> {{ $service->description }}</p>
						</div>
					</div>
		            <!-- End Single Service Item -->	
					@endif
				@endforeach
			@endif
            
				
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Start a theraphy with an expert</h2>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
				<a href="" class="btn btn-main">Get started</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->


<!-- Start Testimonial
=========================================== -->
  <section>
  	    <div class="title text-center">
          <h2>Our happy clients</h2>
          <p> </p>
          <div class="border"></div>
        </div>
  </section>
	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="{{ asset('images/client-logo/clients-1.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>John Doe</h3>
								<span></span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
				
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="{{ asset('images/client-logo/clients-2.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Emma Harrison</h3>
								<span></span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="{{ asset('images/client-logo/clients-3.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Alexander Lucas</h3>
								<span></span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->

@endsection

@section('scripts')

@endsection