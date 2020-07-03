@extends('layouts.backend_auth')
@section('title')
Verify Your Email Address
@endsection
@section('styles')
@endsection
@section('content')
<section class="login-block">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					<h4>{{ config('app.name', 'Monerdaktar') }}</h4>

				</div>
				<div class="auth-box card">
					<div class="card-block">
						<div class="row m-b-20">
							<div class="col-md-12">
								<h3 class="text-left">{{ __('Verify Your Email Address') }}</h3>
								@if (session('resent'))
								<div class="alert alert-success" role="alert">
									{{ __('A fresh verification link has been sent to your email address.') }}
								</div>
								@endif
								@include('partials.messages')

								{{ __('Before proceeding, please check your email for a verification link.') }}
								{{ __('If you did not receive the email') }},
							</div>
						</div>
						<form class="md-float-material form-material" method="POST" action="{{ route('verification.resend') }}">
							@csrf
							<div class="row m-t-30">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('click here to request another') }}</button>
								</div>
							</div>
						</form>
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

			</div>

		</div>

	</div>

</div>

</section>
@endsection
@section('scripts')
@endsection