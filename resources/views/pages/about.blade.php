@extends('layouts.app')

@section('title')
	About 
@endsection
@section('styles')
@endsection
@section('call2action')
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>About Us</h2>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="/">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">About Us</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</section>
@endsection
@section('content')
<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-20">
				<h2>Welcome to<br> {{ config('app.name' ,'Monerdaktar') }}</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus dolor harum voluptatibus modi dicta ducimus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas. Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam!</p>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="{{ asset('images/company/company-image.jpg')}}" alt="">
			</div>
		</div>
	</div>
</section>

<section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Our Mission</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
				<img src="{{ asset('images/company/company-image-2.jpg')}}" alt="" class="img-responsive mt-30">
			</div>
			<div class="col-md-6">
				<h3>Our Vision</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
				<img src="{{ asset('images/company/company-image-3.jpg')}}" alt="" class="img-responsive mt-30">
			</div>
		</div>
	</div>
</section>

<section class="promo-video section-sm">
	<div class="container">
		<div class="row">
			<!-- section title -->
			<div class="title text-center" >
				<h2>Our Promo Video</h2>
				<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu.Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			<div class="col-md-8 col-md-offset-2">
				<iframe src="https://player.vimeo.com/video/51119176" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

<!-- Start Our Team
		=========================================== -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
			
				<!-- section title -->
				<div class="title text-center " >
					<h2>Our Team</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati, quis similique quos.</p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
		  @if(count($doctors) >0 )
          	@foreach($doctors as $doctor)		
				<!-- team member -->
				<div class="col-md-4 col-sm-6 " >
	               <div class="team-member text-center">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="{{ asset($doctor->profileuri) }}" alt="Meghna">
							<!-- /member photo -->
							
							<!-- member social profile -->
							<div class="mask">
								<ul class="clearfix">
									<li><a href="{{ $doctor->facebook }}"><i class="tf-ion-social-facebook"></i></a></li>
									<li><a href="{{ $doctor->twitter }}"><i class="tf-ion-social-twitter"></i></a></li>
									<li><a href="{{ $doctor->googleplus }}"><i class="tf-ion-social-google-outline"></i></a></li>
									<li><a href="{{ $doctor->linkedin}}"><i class="tf-ion-social-dribbble"></i></a></li>					
								</ul>
							</div>
							<!-- /member social profile -->
						</div>
						
						<!-- member name & designation -->
						<div class="member-content">
							<h3>{{ $doctor->title .' '.$doctor->firstname . ' ' . $doctor->middlename . ' ' . $doctor->lastname }}</h3>
							<span>{{ $doctor->qualification }}</span>
							<p>{{ $doctor->bio }}</p>
							<a class="btn btn-main" href="/doctors/{{ $doctor->id }}">View Profile</a>
						</div>
						<!-- /member name & designation -->
					   
	               </div>
	            </div>
				<!-- end team member -->
				@endforeach
			  @endif
			</div>  	<!-- End row -->
		</div>   	<!-- End container -->
	</section>   <!-- End section -->



@endsection

@section('scripts')

@endsection