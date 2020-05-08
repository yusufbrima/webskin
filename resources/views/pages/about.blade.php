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
				
				<!-- team member -->
				<div class="col-md-4 col-sm-6 " >
	               <div class="team-member text-center">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="{{ asset('images/team/1587800064.jpg')}}" alt="Meghna">
							<!-- /member photo -->
							
							<!-- member social profile -->
							<div class="mask">
								<ul class="clearfix">
									<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>					
								</ul>
							</div>
							<!-- /member social profile -->
						</div>
						
						<!-- member name & designation -->
						<div class="member-content">
							<h3>Sharmin Ara</h3>
							<span>MS & M.Phil (part-2) in Clinical Psychology <br />Telepsychiatry Research and Innovation Network</span>
							<p>She works as a psychologist, researcher, trainer, and clinical supervisor in mental health fields. She is a Cognitive-Behavioral Therapy (CBT) and Systemic Family Therapy (SFT) practitioner. She deals with children, adolescents, and adults with a wide range of emotional, behavioral problems like depression, substance abuse, relationship difficulties, family issues, etc.</p>
						</div>
						<!-- /member name & designation -->
					   
	               </div>
	            </div>
				<!-- end team member -->
				
				<!-- team member -->
				<div class="col-md-4 col-sm-6 " >
	               <div class="team-member text-center">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="{{ asset('images/team/15877972181681502808.jpg')}}" alt="Meghna">
							<!-- /member photo -->
							
							<!-- member social profile -->
							<div class="mask">
								<ul class="clearfix">
									<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
								</ul>
							</div>
							<!-- /member social profile -->
						</div>
						
						<!-- member name & designation -->
						<div class="member-content">
							<h3>Md. Ashiquir Rahaman</h3>
							<span>Ms & M.Phil in Clinical Psychology <br />Telepsychiatry Research and Innovation Network Ltd</span>
							<p>Mr Ashique is an enthusiastic researcher-practitioner in the field of clinical psychology. In his clinical practice, he delivers cognitive behavioral therapy (CBT) and other evidence-based treatments to adult and adolescent clients with a wide range of emotional, behavioral, adjustment, and chronic health related problems such as anxiety, stress, depression, trauma, chronic pain, drug addiction, and relationship problems.</p>
						</div>
						<!-- /member name & designation -->
					</div>
	            </div>
				<!-- end team member -->
				
				<!-- team member -->
				<div class="col-md-4 col-sm-6 ">
	               <div class="team-member text-center">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="{{ asset('images/team/1587808824.jpg')}}" alt="Meghna">
							<!-- /member photo -->
							
							<!-- member social profile -->
							<div class="mask">
								<ul class="clearfix">
									<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>					
								</ul>
							</div>
							<!-- /member social profile -->
						</div>
						
						<!-- member name & designation -->
						<div class="member-content">
							<h3>Md. Aminul Islam</h3>
							<span>MSc & MPhil in Clinical Psychology <br />Telepsychiatry Research and Innovation Network Ltd</span>
							<p>Md. Aminul working in the mental health sector for a long period of time. Primarily, a mental health professional, he loves to work with adolescents and adults. Aminul has been working with different disorders, and he delivers cognitive behavioral therapy (CBT), Dialectical behavior therapy (DBT) and other evidence-based treatments to adult and adolescent with a wide range of emotional, behavioral, and adjustment issues.</p>
						</div>
						<!-- /member name & designation -->
						
	               </div>
	            </div>
				<!-- end team member -->
			</div>  	<!-- End row -->

			<div class="row">
				
				<!-- team member -->
				<div class="col-md-4 col-sm-6 " >
	               <div class="team-member text-center">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="{{ asset('images/team/15878033771711244749.jpg')}}" alt="Meghna">
							<!-- /member photo -->
							
							<!-- member social profile -->
							<div class="mask">
								<ul class="clearfix">
									<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>					
								</ul>
							</div>
							<!-- /member social profile -->
						</div>
						
						<!-- member name & designation -->
						<div class="member-content">
							<h3>Prof. Dr. Faruq Alam</h3>
							<span>MBBS, FCPS <br />National Institute of Mental Health</span>
							<p>Prof Dr. Alam is one of the most famous and leading child and adolescent Psychiatrist in Bangladesh with experience of about 30 years i the field. He worked as Director Cum Professor of Child and Adolescent Psychiatry in National Institute of Bangladesh and conducted several pioneering research in the filed.</p>
						</div>
						<!-- /member name & designation -->
					   
	               </div>
	            </div>
				<!-- end team member -->
				
				<!-- team member -->
				<div class="col-md-4 col-sm-6 " >
	               <div class="team-member text-center">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="{{ asset('images/team/default.png')}}" alt="Meghna">
							<!-- /member photo -->
							
							<!-- member social profile -->
							<div class="mask">
								<ul class="clearfix">
									<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
								</ul>
							</div>
							<!-- /member social profile -->
						</div>
						
						<!-- member name & designation -->
						<div class="member-content">
							<h3>Dr. Hosnea Ara</h3>
							<span>MBBS, MD (Psychiatry)</span>
							<p>As an Assistant Professor of Psychiatry I'm registered member of BMDC bearing # A54507, General Member of Bangladesh Association of Psychiatrist & Bangladesh Association for Child & Adolescent Mental Health. I've got Honorable Presidential & Prime Minister's Gold Medal in MD (Psychiatry) from BSMMU. I would like to promote women's & child mental health with psychotherapy treatment.</p>
						</div>
						<!-- /member name & designation -->
					</div>
	            </div>
				<!-- end team member -->
				
				<!-- team member -->
				<div class="col-md-4 col-sm-6 ">
	               <div class="team-member text-center">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="{{ asset('images/team/15878083601718827138.jpg')}}" alt="Meghna">
							<!-- /member photo -->
							
							<!-- member social profile -->
							<div class="mask">
								<ul class="clearfix">
									<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>					
								</ul>
							</div>
							<!-- /member social profile -->
						</div>
						
						<!-- member name & designation -->
						<div class="member-content">
							<h3>Tanjir Rashid Soron</h3>
							<span>MD in Psychiatry <br />Telepsychiatry Research and Innovation Network</span>
							<p>Md. Aminul working in the mental health sector for a long period of time. Primarily, a mental health professional, he loves to work with adolescents and adults. Aminul has been working with different disorders, and he delivers cognitive behavioral therapy (CBT), Dialectical behavior therapy (DBT) and other evidence-based treatments to adult and adolescent with a wide range of emotional, behavioral, and adjustment issues.</p>
						</div>
						<!-- /member name & designation -->
						
	               </div>
	            </div>
				<!-- end team member -->
			</div>  	<!-- End row -->
		</div>   	<!-- End container -->
	</section>   <!-- End section -->



@endsection

@section('scripts')

@endsection