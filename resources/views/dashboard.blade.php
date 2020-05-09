@extends('layouts.app')
@section('title')
    {{ Auth::user()->name }}
@endsection
@section('styles')
@endsection
@section('call2action')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Hi {{ Auth::user()->username }}</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a></li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <span> <a href="{{ route('doctors.create')}}"><i class="fas fa-user-plus"></i> New Doctor</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Our Team
        =========================================== -->
    <section class="team" id="team">
        <div class="container">
                            <!-- section title -->
                <div class="title text-center " >
                    <h2>List of Doctors</h2>
                    <div class="border"></div>
                </div>

            

                <!-- /section title -->
          @if(count($doctors) >0 )
            <div class="row">
            @foreach($doctors as $doctor)       
                <!-- team member -->
                <div class="col-md-4 col-sm-6 " >
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
                            <a class="btn btn-main" href="/doctors/{{ $doctor->id }}">Read more</a>
                        </div>
                        <!-- /member name & designation -->
                       
                   </div>
                </div>
                <!-- end team member -->
                @endforeach
                </div>      <!-- End row -->
                 {{ $doctors->links() }}
              @endif

        </div>      <!-- End container -->
    </section>   <!-- End section -->
@endsection
@section('scripts')

@endsection