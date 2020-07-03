@extends('layouts.backend_auth')
@section('title')
Confirm Password
@endsection
@section('styles')
@endsection
@section('content')
<section class="login-block">

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">

				<form class="md-float-material form-material" method="POST" action="{{ route('password.confirm') }}">
					@csrf
					<div class="text-center">
						<h4>{{ config('app.name', 'Monerdaktar') }}</h4>
					</div>
					<div class="auth-box card">
						<div class="card-block">
							<div class="row m-b-20">
								<div class="col-md-12">
									<h3 class="text-center txt-primary">Confirm Password</h3>
									{{ __('Please confirm your password before continuing.') }}
									@include('partials.messages')
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group form-primary">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
										<span class="form-bar"></span>
										<label class="float-label" id="password">{{ __('Password') }}</label>
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group form-primary">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
										<span class="form-bar"></span>
										<label class="float-label" for="password-confirm">{{ __('Confirm Password') }}</label>
									</div>
								</div>
							</div>
							<div class="row m-t-30">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('Confirm Password') }}</button>
									@if (Route::has('password.request'))
									<a class="btn btn-link" href="{{ route('password.request') }}">
										{{ __('Forgot Your Password?') }}
									</a>
									@endif
								</div>
							</div>
							<a href="/signup"><p class="text-inverse text-left">Don't have an account? <b>Register here </b>for free!</p></a>
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