@extends('layouts.backend_auth')
@section('title')
Login
@endsection
@section('styles')
@endsection
@section('content')
<section class="login-block">

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">

				<form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="text-center">
						<h4>{{ config('app.name', 'Monerdaktar') }}</h4>
					</div>
					<div class="auth-box card">
						<div class="card-block">
							<div class="row m-b-20">
								<div class="col-md-12">
									<h3 class="text-center txt-primary">Sign In</h3>
									 @include('partials.messages')
								</div>
							</div>
							<div class="form-group form-primary">
								<input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
								<span class="form-bar"></span>
								<label class="float-label" for="username">Username Or Email</label>
								                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="form-group form-primary">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
								<span class="form-bar"></span>
								<label class="float-label" for="password">{{ __('Password') }}</label>
								 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="row m-t-25 text-left">
								<div class="col-12">
									<div class="checkbox-fade fade-in-primary">
										<label for="remember">
											<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
											<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
											<span class="text-inverse">{{ __('Remember Me') }}</span>
										</label>
									</div>
									<div class="forgot-phone text-right float-right">
										<a href="/password/reset" class="text-right f-w-600"> Forgot Password?</a>
									</div>
								</div>
							</div>
							<div class="row m-t-30">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
								</div>
							</div>
							<a href="{{route('register') }}"><p class="text-inverse text-left">Don't have an account? <b>Register here </b>for free!</p></a>
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