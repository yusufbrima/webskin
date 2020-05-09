@extends('layouts.app')

@section('title')
	Edit {{$doctor->title .' '. $doctor->firstname . ' '.$doctor->lastname }} 
@endsection
@section('styles')
@endsection
@section('call2action')
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Add New Doctor</h2>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="/">Home</a></li>
				    <li class="breadcrumb-item"><a href="/about">About</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Add Doctor</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</section>
@endsection
@section('content')
	<div class="container" style="margin-top: 2%;">
		<div class="row">
			<div class="col-md-6 text-center">
			@if(!empty($doctor))
				{!! Form::open(['action' => ['DoctorsController@update',$doctor->id ]]) !!}
					<div class="form-group">
							{!! Form::text('title', $doctor->title,['class'=>'form-control','placeholder'=>'Title','autofocus'=>'true']) !!}
					</div>
					<div class="form-group">
							{!! Form::text('firstname',$doctor->firstname,['class'=>'form-control','placeholder'=>'First Name']) !!}
					</div>
					<div class="form-group">
							{!! Form::text('middlename',$doctor->middlename,['class'=>'form-control','placeholder'=>'Middle Name']) !!}
					</div>
					<div class="form-group">
							{!! Form::text('lastname',$doctor->lastname,['class'=>'form-control','placeholder'=>'Last Name']) !!}
					</div>
					<div class="form-group">
							{!! Form::email('email',$doctor->email,['class'=>'form-control','placeholder'=>'Enter your email ID']) !!}
					</div>
					<div class="form-group">
							{!! Form::text('telephone',$doctor->telephone,['class'=>'form-control','placeholder'=>'Enter telephone number']) !!}
					</div>
					<div class="form-group">
							{!! Form::text('address',$doctor->address,['class'=>'form-control','placeholder'=>'Address']) !!}
					</div>
					<div class="form-group">
							{!! Form::textarea('qualification',$doctor->qualification,['class'=>'form-control','placeholder'=>'Qualification']) !!}
					</div>
					<div class="form-group">
							{!! Form::textarea('bio',$doctor->bio,['class'=>'form-control','placeholder'=>'Brief Biography']) !!}
					</div>
					<div class="form-group">
							{{ Form::label('image','Profile Picture') }}
							{!! Form::file('image',['class'=>'form-control']); !!}
					</div>
					<div class="form-group">
						{{ Form::hidden('_method','PUT') }}
						{!! Form::submit('Save',['class'=>'btn btn-primary form-control']) !!}
						
					</div>
				{!! Form::close() !!}
			@endif
			</div>
		</div>
	</div>

@endsection

@section('scripts')

@endsection