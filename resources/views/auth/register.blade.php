@extends('layouts.backend_auth')
@section('title')
Register
@endsection
@section('styles')
@endsection
@section('content')
<section class="login-block">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <form class="md-float-material form-material" method="POST" action="{{ route('register') }}">
                     @csrf
                    <div class="text-center">
                        <h4>{{ config('app.name', 'Monerdaktar') }}</h4>
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign up</h3>
                                     @include('partials.messages')
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('Username') }}" required autocomplete="username" autofocus>
                                <span class="form-bar"></span>
                                <label class="float-label" for="name"></label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group form-primary">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="{{ __('Phone') }}" autocomplete="phone" autofocus>
                                <span class="form-bar"></span>
                                <label class="float-label" for="name"></label>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group form-primary">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email">
                                <span class="form-bar"></span>
                                <label class="float-label" for="email"></label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group form-primary">
                              <select name="role_id" class="form-control @error('role_id') is-invalid @enderror" required>
                                <option value="opt1">Choose Account Type</option>
                                <option value="1">Client</option>
                                <option value="2">Expert</option>
                            </select>
                            @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
                        <div class="row m-t-25 text-left">
                         <div class="col-md-12">
                            <div class="checkbox-fade fade-in-primary">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                    <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('Sign Up') }}</button>
                        </div>
                    </div>
                    <a href="{{route('login') }}"> <p class="text-inverse text-left">Returning User?<b>Sign in </b>here!</p></a>
                    <hr />
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

</section>
@endsection
@section('scripts')
@endsection