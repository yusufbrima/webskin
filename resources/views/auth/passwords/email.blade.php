@extends('layouts.backend_auth')
@section('title')
Recover your password
@endsection
@section('styles')
@endsection
@section('content')
<section class="login-block">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">

				<form class="md-float-material form-material" method="POST" action="{{ route('password.email') }}">
					@csrf
					<div class="text-center">
						<h4>{{ config('app.name', 'Monerdaktar') }}</h4>
						@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
						@endif
					</div>
					<div class="auth-box card">
						<div class="card-block">
							<div class="row m-b-20">
								<div class="col-md-12">
									<h3 class="text-left">Recover your password</h3>
									@include('partials.messages')
								</div>
							</div>
							<div class="form-group form-primary">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								<span class="form-bar"></span>
								<label class="float-label">Your Email Address</label>
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"> {{ __('Send Password Reset Link') }}</button>
								</div>
							</div>
							<p class="f-w-600 text-right">Back to <a href="{{route('login') }}">Login.</a></p>
							<div class="row">
								<div class="col-md-10">
									<p class="text-inverse text-left m-b-0">Thank you.</p>
									<p class="text-inverse text-left"><a href="/"><b>Back to website</b></a></p>
								</div>
								<div class="col-md-2">
									<img src="{{ asset('backend/png/logo-small-bottom.png') }}" alt="small-logo.png">
								</div>
							</div>
						</div>
					</div>
				</form>

			</div>

		</div>

	</div>

</div>

</section>
@endsection
@section('scripts')
@endsection