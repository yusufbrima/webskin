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
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
             <!--  <i class="tf-ion-ios-alarm-outline"></i> -->
             <!--  <i class="ios-call" md="md-call"></i> -->
             <i class="fas fa-hospital-user"></i>
              <h4>Psychiatric Consultation</h4>
              <p>For patients suffering from mental problems, seeking a psychiatric consultation is the first step towards receiving the treatment they need. Psychiatric consultation are available from the most famous and respected psychiatrists having MD or FCPS and other advanced degrees. A comprehensive psychiatric consultation may require multiple sessions. After the complete mental state examination the experts make your diagnosis and provide appropriate treatment either medication or psychotherapy or both</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fas fa-user-md"></i>
              <h4>Psychotherapy and Counselling</h4>
              <p>The best and brightest Clinical Psychologists and Councilors are providing evidence- based quality sessions for our clients. Psychotherapy and Counselling help eliminate or control troubling symptoms due to the impact of stress, trauma, medical illness or loss and different mental disorders, so that a person can function better and can increase well-being. Qualified psychologist do counseling and psychotherapy, perform psychological testing, and provide treatment for different mental disorders. The different types of CBT, DBT, Group therapy, Couple Counselling, Family Therapy, Mindfulness and other psychological technique are used for resolving issues.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fas fa-laptop-medical"></i>
              <h4>Self Assesment</h4>
              <p>Self-assessment help assess your behavior, personality and capabilities. Self- assessment includes psychological assessment and testing that uses a combination of techniques to help arrive at some hypotheses about a person. They are designed to help you thorough clinical interview, tests such as questionnaires or checklists or performing a psychological battery and other assessment tools to measure and observe issues. After the assessment a systematic articulated report is provide to the person. IQ test, aptitude testing, memory test, personality test and neuropsychogical test are available to assess a wide range of issues in interest.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fas fa-diagnoses"></i>
              <h4>Other services</h4>
              <p>We provide some other value added services to our clients</p>
            </div>
          </div><!-- END COL -->
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
			<article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="{{ asset('images/team/1587800064.jpg') }}" alt="amazing caves coverimage" class="img-fluid img-circle">
					</div>

					<div class="content">
						<h5><a href="#">Sharmin Ara</a></h5>
						<h6>MS & M.Phil (part-2) in Clinical Psychology <br />Telepsychiatry Research and Innovation Network</h6>
						<p>She works as a psychologist, researcher, trainer, and clinical supervisor in mental health fields. She is a Cognitive-Behavioral Therapy (CBT) and Systemic Family Therapy (SFT) practitioner. She deals with children, adolescents, and adults with a wide range of emotional, behavioral problems like depression, substance abuse, relationship difficulties, family issues, etc.</p>
						<a class="btn btn-main" href="#">Read more</a>
					</div>
				</div>
			</article>
			<!-- /single blog post -->

			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="{{ asset('images/team/15877972181681502808.jpg')}}" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h5><a href="#">Md. Ashiquir Rahaman</a></h5>
						<h6>Ms & M.Phil in Clinical Psychology <br />Telepsychiatry Research and Innovation Network Ltd</h6>
						<p>Mr Ashique is an enthusiastic researcher-practitioner in the field of clinical psychology. In his clinical practice, he delivers cognitive behavioral therapy (CBT) and other evidence-based treatments to adult and adolescent clients with a wide range of emotional, behavioral, adjustment, and chronic health related problems such as anxiety, stress, depression, trauma, chronic pain, drug addiction, and relationship problems.</p>
						<a class="btn btn-main" href="#">Read more</a>
					</div>
				</div>
			</article>
			<!-- end single blog post -->

			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="{{ asset('images/team/1587808824.jpg') }}" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h5><a href="#">Md. Aminul Islam</a></h5>
						<h6>MSc & MPhil in Clinical Psychology <br />Telepsychiatry Research and Innovation Network Ltd</h6>
						<p>Md. Aminul working in the mental health sector for a long period of time. Primarily, a mental health professional, he loves to work with adolescents and adults. Aminul has been working with different disorders, and he delivers cognitive behavioral therapy (CBT), Dialectical behavior therapy (DBT) and other evidence-based treatments to adult and adolescent with a wide range of emotional, behavioral, and adjustment issues.</p>
						<a class="btn btn-main" href="#">Read more</a>
					</div>
				</div>
			</article>
			<!-- end single blog post -->
		</div> <!-- end row -->
		<div class="row">
			<!-- /section title -->
			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="{{ asset('images/team/15878033771711244749.jpg') }}" alt="amazing caves coverimage" class="img-fluid img-circle">
					</div>

					<div class="content">
						<h5><a href="#">Prof. Dr. Faruq Alam</a></h5>
						<h6>MBBS, FCPS <br />National Institute of Mental Health</h6>
						<p>Prof Dr. Alam is one of the most famous and leading child and adolescent Psychiatrist in Bangladesh with experience of about 30 years i the field. He worked as Director Cum Professor of Child and Adolescent Psychiatry in National Institute of Bangladesh and conducted several pioneering research in the filed.</p>
						<a class="btn btn-main" href="#">Read more</a>
					</div>
				</div>
			</article>
			<!-- /single blog post -->

			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="{{ asset('images/team/default.png')}}" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h5><a href="#">Dr. Hosnea Ara</a></h5>
						<h6>MBBS, MD (Psychiatry)</h6>
						<p>As an Assistant Professor of Psychiatry I'm registered member of BMDC bearing # A54507, General Member of Bangladesh Association of Psychiatrist & Bangladesh Association for Child & Adolescent Mental Health. I've got Honorable Presidential & Prime Minister's Gold Medal in MD (Psychiatry) from BSMMU. I would like to promote women's & child mental health with psychotherapy treatment.</p>
						<a class="btn btn-main" href="#">Read more</a>
					</div>
				</div>
			</article>
			<!-- end single blog post -->

			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="{{ asset('images/team/15878083601718827138.jpg') }}" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h5><a href="#">Tanjir Rashid Soron</a></h5>
						<h6>MD in Psychiatry <br />Telepsychiatry Research and Innovation Network</h6>
						<p>Md. Aminul working in the mental health sector for a long period of time. Primarily, a mental health professional, he loves to work with adolescents and adults. Aminul has been working with different disorders, and he delivers cognitive behavioral therapy (CBT), Dialectical behavior therapy (DBT) and other evidence-based treatments to adult and adolescent with a wide range of emotional, behavioral, and adjustment issues.</p>
						<a class="btn btn-main" href="#">Read more</a>
					</div>
				</div>
			</article>
			<!-- end single blog post -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->
@endsection

@section('scripts')

@endsection