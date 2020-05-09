@extends('layouts.app')

@section('title')
	Welcome
@endsection
@section('styles')
@endsection
@section('slider')
  @include('partials.slider')
@endsection

@section('content')

<!--
Start Call To Action
==================================== -->
<div class="container">
<section class="call-to-action section covid-19">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Our COVID-19 Respose</h2>
				<p>Having mental health difficulties? Get help from world renowned experts before.</p>
				<a href="" class="btn btn-danger btn-main">Learn more</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
</div>
<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <!-- section title -->
        <div class="title text-center">
          <h2>Our Services</h2>
          <p> </p>
          <div class="border"></div>
        </div>
        <!-- /section title -->
      </div>

      <div class="col-md-4 text-center">
        <img src="{{ asset('images/about/member.jpg') }}" class="inline-block" alt="">
      </div>
      <div class="col-md-8">
        <div class="row text-center">
          @if(count($resultset['services']) >0 )
          	@foreach($resultset['services'] as $service)
          		<div class="col-md-6 col-sm-6 col-xs-12">
		            <div class="service-item">
		             <!--  <i class="tf-ion-ios-alarm-outline"></i> -->
		             <!--  <i class="ios-call" md="md-call"></i> -->
		             <i class="fas fa-hospital-user"></i>
		              <h4>{{ $service->title }}</h4>
		              <p>{{ $service->description }}</p>
		            </div>
	          </div><!-- END COL -->
          	@endforeach
          @else 
          	{{ 'Not services found' }}
          @endif
        </div>
      </div>
    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->

@include('partials.bootstrapslider')
<!--
Start About Section
==================================== -->
<section class="about-2 section" id="about">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2>Our Vision</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->

			<div class="col-md-6">
				<img src="{{ asset('images/about/about-2.png')}}" class="img-fluid" alt="">
			</div>
			<div class="col-md-6">
				<h2>Mental health checklist</h2>
				<ul class="checklist">
					<li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
					<li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
					<li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
					<li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
					<li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
				</ul>
				<a href="#" class="btn btn-main mt-20">Learn More</a>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Get help today</h2>
				<p>Having mental health difficulties? Get help from world renowned experts before.</p>
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

<!--
		Start Blog Section
		=========================================== -->

<section class="blog" id="blog">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
					<h2> Meet our <span class="color">experts</span></h2>
					<div class="border"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero
						inventore nam.</p>
				</div>
			</div>
			<!-- /section title -->
			<!-- single blog post -->
          @if(count($resultset['doctors']) >0 )
          	@foreach($resultset['doctors'] as $doctor)
			<article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="{{ asset($doctor->profileuri) }}" alt="amazing caves coverimage" class="img-fluid img-circle">
					</div>

					<div class="content">
						<h5><a href="#">{{ $doctor->title .' '.$doctor->firstname . ' ' . $doctor->middlename . ' ' . $doctor->lastname }}</a></h5>
						<h6>{{ $doctor->qualification }}</h6>
						<p>{{ $doctor->bio }}</p>
						<a class="btn btn-main" href="/doctors/{{ $doctor->id }}">View Profile</a>
					</div>
				</div>
			</article>
			@endforeach
			@endif
			<!-- /single blog post -->

			
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->
@endsection

@section('scripts')

@endsection