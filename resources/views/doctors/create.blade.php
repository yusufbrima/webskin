@extends('layouts.app')

@section('title')
	New Doctor
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
				{!! Form::open(['action' => ['DoctorsController@store']]) !!}
					<div class="form-group">
							{!! Form::text('title','',['class'=>'form-control','placeholder'=>'Title','autofocus'=>'true']) !!}
					</div>
					<div class="form-group">
							{!! Form::text('firstname','',['class'=>'form-control','placeholder'=>'First Name']) !!}
					</div>
					<div class="form-group">
							{!! Form::text('middlename','',['class'=>'form-control','placeholder'=>'Middle Name']) !!}
					</div>
					<div class="form-group">
							{!! Form::text('lastname','',['class'=>'form-control','placeholder'=>'Last Name']) !!}
					</div>
					<div class="form-group">
							{!! Form::email('email','',['class'=>'form-control','placeholder'=>'Enter your email ID']) !!}
					</div>
					<div class="form-group">
							{!! Form::text('telephone','',['class'=>'form-control','placeholder'=>'Enter telephone number']) !!}
					</div>
					<div class="form-group">
							{!! Form::text('address','',['class'=>'form-control','placeholder'=>'Address']) !!}
					</div>
					<div class="form-group">
							{!! Form::textarea('qualification','',['class'=>'form-control','placeholder'=>'Qualification']) !!}
					</div>
					<div class="form-group">
							{!! Form::textarea('bio','',['class'=>'form-control','placeholder'=>'Brief Biography']) !!}
					</div>
					<div class="form-group">
							{{ Form::label('image','Profile Picture') }}
							{!! Form::file('image',['class'=>'form-control']); !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Submit',['class'=>'btn btn-primary form-control']) !!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection

@section('scripts')

@endsection