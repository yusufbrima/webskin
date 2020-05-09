@extends('layouts.app')

@section('title')
	{{$doctor->title .' '. $doctor->firstname . ' '.$doctor->lastname }} 
@endsection
@section('styles')
@endsection
@section('call2action')
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>About {{$doctor->title .' '. $doctor->firstname . ' '.$doctor->lastname }}</h2>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="/">Home</a></li>
				    <li class="breadcrumb-item"><a href="/about">About</a></li>
				    <li class="breadcrumb-item active" aria-current="page">{{$doctor->title .' '. $doctor->firstname . ' '.$doctor->lastname }}</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</section>
@endsection
@section('content')

<!-- Start Our Team
		=========================================== -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
		  @if(!empty($doctor))		
				<!-- team member -->
				<div class="col-md-6 col-sm-6 " >
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
							<a class="btn btn-main" href="/doctors/{{ $doctor->id }}/edit">Edit</a>
							{!! Form::open(['action' => ['DoctorsController@destroy',$doctor->id ]]) !!}
								{{ Form::hidden('_method','DELETE') }}
								{!! Form::submit('Delete',['class'=>'btn btn-danger pull-right']) !!}
							{!! Form::close() !!}
						</div>
						<!-- /member name & designation -->
					   
	               </div>
	            </div>
				<!-- end team member -->
			  @endif
			  <div class="col-md-6 col-sm-6 " >
	               <div class="team-member text-center">
	               </div>
	           </div>
			</div>  	<!-- End row -->
		</div>   	<!-- End container -->
	</section>   <!-- End section -->



@endsection

@section('scripts')

@endsection