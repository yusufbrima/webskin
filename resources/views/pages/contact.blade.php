@extends('layouts.app')

@section('title')
	Contact Us 
@endsection
@section('styles')
@endsection
@section('call2action')
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Contact Us</h2>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="/">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</section>
@endsection
@section('content')	
<!-- Srart Contact Us
		=========================================== -->		
	<section class="contact-us" id="contact">
		<div class="container">
			<div class="row">
				
				<!-- section title -->
				<div class="title text-center" >
					<h2>Get In Touch</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam ut numquam molestiae quaerat incidunt?</p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
				
				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<h3>Contact Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
					<ul class="contact-short-info" >
						<li>
							<i class="tf-ion-ios-home"></i>
							<span>Rupayan Trade Center, 2nd Floor,Banglamotor, Dhaka-1215, Bangladesh</span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Phone: (+880) 1552-525252</span>
						</li>
						<li>
							<i class="tf-ion-android-globe"></i>
							<span>Fax: +00-00-000-000</span>
						</li>
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email:  info@trin-innovation.com</span>
						</li>
					</ul>
					<!-- Footer Social Links -->
					<div class="social-icon">
						<ul>
							<li><a href="https://www.facebook.com/TelepsychiatryResearchInnovationNetwork/?epa=SEARCH_BOX" target="_blank"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
						</ul>
					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->
					
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" method="post" action="sendmail.php" role="form">
					
						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
						</div>
						
						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>
						
						<div class="form-group">
							<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
						</div>
						
						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
						</div>
						
						<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way :)
						</div>
						
						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>
						
						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
						</div>						
						
					</form>
				</div>
				<!-- ./End Contact Form -->
			
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end section -->
	<!-- Google Map -->

	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58432.8037427961!2d90.395256!3d23.745588!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x401507d92bab339f!2sRupayan%20Trade%20Centre!5e0!3m2!1sen!2sus!4v1588935454854!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
<!--====  End of Google Map  ====-->

@endsection

@section('scripts')

@endsection