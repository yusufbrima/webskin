@extends('layouts.backend')
@section('title')
    Dashboard
@endsection
@section('navigator')
	<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a> </li>
@endsection
@section('content')
<div class="row">
	<div class="col-md-12 col-xl-8">
		<div class="card">
			<div class="card-header">
				<h5>Appoinment Log</h5>
				<span>use class <code>table</code> inside table element</span>
				<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
			</div>
			<div class="card-block table-border-style">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Meeting Title</th>
								<th>Therapist</th>
								<th>Schedul</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>N/A</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>Started</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>Completed</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-xl-4">
		<div class="card comp-card">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col">
						<h6 class="m-b-25">Experts</h6>
						<h3 class="f-w-700 text-c-blue">{{ $totalExperts ?? '0' }}</h3>
					</div>
					<div class="col-auto">
						<i class="fa fa-user-md bg-c-blue" aria-hidden="true"></i>
						<!-- <i class="fas fa-eye bg-c-blue"></i> -->
					</div>
				</div>
			</div>
		</div>
		<div class="card comp-card">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col">
						<h6 class="m-b-25">Clients</h6>
						<h3 class="f-w-700 text-c-blue">{{ $totalPatients ?? '0' }}</h3>
					</div>
					<div class="col-auto">
						<i class="fa fa-users bg-c-blue"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="card comp-card">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col">
						<h6 class="m-b-25">Total Users</h6>
						<h3 class="f-w-700 text-c-green">{{  $totalExperts +  $totalPatients }}</h3>
					</div>
					<div class="col-auto">
						<i class="far fa-handshake bg-c-green"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-12">
		<div class="card proj-progress-card">
			<div class="card-block">
				<div class="row">
					<div class="col-xl-3 col-md-6">
						<h6>Meeting with Dr. Soron</h6>
						<h5 class="m-b-30 f-w-700"> 20 days<span class="text-c-green m-l-10">69%</span></h5>
						<div class="progress">
							<div class="progress-bar bg-c-red" style="width:25%"></div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<h6>Session with Dr. Sharmin Ara </h6>
						<h5 class="m-b-30 f-w-700">4 days<span class="text-c-red m-l-10">5%</span></h5>
						<div class="progress">
							<div class="progress-bar bg-c-blue" style="width:65%"></div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<h6>Successfull Task</h6>
						<h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
						<div class="progress">
							<div class="progress-bar bg-c-green" style="width:85%"></div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<h6>Ongoing Session</h6>
						<h5 class="m-b-30 f-w-700">10 days<span class="text-c-green m-l-10">5%</span></h5>
						<div class="progress">
							<div class="progress-bar bg-c-yellow" style="width:45%"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-4 col-md-12">
		<div class="card latest-update-card">
			<div class="card-header">
				<h5>Therapy Session History</h5>
				<div class="card-header-right">
					<ul class="list-unstyled card-option">
						<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
						<li><i class="feather icon-maximize full-card"></i></li>
						<li><i class="feather icon-minus minimize-card"></i></li>
						<li><i class="feather icon-refresh-cw reload-card"></i></li>
						<li><i class="feather icon-trash close-card"></i></li>
						<li><i class="feather icon-chevron-left open-card-option"></i></li>
					</ul>
				</div>
			</div>
			<div class="card-block">
				<div class="scroll-widget">
					<div class="latest-update-box">
						<div class="row p-t-20 p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<img src="{{ asset('backend/jpg/avatar-4.jpg') }}" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>Your Manager Posted.</h6></a>
								<p class="text-muted m-b-0">Jonny michel</p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="feather icon-briefcase bg-c-red update-icon"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>You have 3 pending Task.</h6></a>
								<p class="text-muted m-b-0">Hemilton</p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>New Order Received.</h6></a>
								<p class="text-muted m-b-0">Hemilton</p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<img src="{{ asset('backend/jpg/avatar-4.jpg') }}" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>Your Manager Posted.</h6></a>
								<p class="text-muted m-b-0">Jonny michel</p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="feather icon-briefcase bg-c-red update-icon"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>You have 3 pending Task.</h6></a>
								<p class="text-muted m-b-0">Hemilton</p>
							</div>
						</div>
						<div class="row">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>New Order Received.</h6></a>
								<p class="text-muted m-b-0">Hemilton</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-4 col-md-12">
		<div class="card latest-update-card">
			<div class="card-header">
				<h5>Appointment History</h5>
				<div class="card-header-right">
					<ul class="list-unstyled card-option">
						<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
						<li><i class="feather icon-maximize full-card"></i></li>
						<li><i class="feather icon-minus minimize-card"></i></li>
						<li><i class="feather icon-refresh-cw reload-card"></i></li>
						<li><i class="feather icon-trash close-card"></i></li>
						<li><i class="feather icon-chevron-left open-card-option"></i></li>
					</ul>
				</div>
			</div>
			<div class="card-block">
				<div class="scroll-widget">
					<div class="latest-update-box">
						<div class="row p-t-20 p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<img src="{{ asset('backend/jpg/avatar-4.jpg') }}" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>Your Manager Posted.</h6></a>
								<p class="text-muted m-b-0">Jonny michel</p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="feather icon-briefcase bg-c-red update-icon"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>You have 3 pending Task.</h6></a>
								<p class="text-muted m-b-0">Hemilton</p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>New Order Received.</h6></a>
								<p class="text-muted m-b-0">Hemilton</p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<img src="{{ asset('backend/jpg/avatar-4.jpg') }}" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>Your Manager Posted.</h6></a>
								<p class="text-muted m-b-0">Jonny michel</p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="feather icon-briefcase bg-c-red update-icon"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>You have 3 pending Task.</h6></a>
								<p class="text-muted m-b-0">Hemilton</p>
							</div>
						</div>
						<div class="row">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>New Order Received.</h6></a>
								<p class="text-muted m-b-0">Hemilton</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card latest-update-card">
			<div class="card-header">
				<h5>Latest Activity</h5>
				<div class="card-header-right">
					<ul class="list-unstyled card-option">
						<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
						<li><i class="feather icon-maximize full-card"></i></li>
						<li><i class="feather icon-minus minimize-card"></i></li>
						<li><i class="feather icon-refresh-cw reload-card"></i></li>
						<li><i class="feather icon-trash close-card"></i></li>
						<li><i class="feather icon-chevron-left open-card-option"></i></li>
					</ul>
				</div>
			</div>
			<div class="card-block">
				<div class="scroll-widget">
					<div class="latest-update-box">
						<div class="row p-t-20 p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="b-primary update-icon ring"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>Devlopment & Update</h6></a>
								<p class="text-muted m-b-0">Lorem ipsum dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="b-primary update-icon ring"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>Showcases</h6></a>
								<p class="text-muted m-b-0">Lorem dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="b-success update-icon ring"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>Miscellaneous</h6></a>
								<p class="text-muted m-b-0">Lorem ipsum dolor sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="b-danger update-icon ring"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>Your Manager Posted.</h6></a>
								<p class="text-muted m-b-0">Lorem ipsum dolor sit amet, <a href="#!" class="text-c-red"> More</a></p>
							</div>
						</div>
						<div class="row p-b-30">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="b-primary update-icon ring"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>Showcases</h6></a>
								<p class="text-muted m-b-0">Lorem dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
							</div>
						</div>
						<div class="row">
							<div class="col-auto text-right update-meta p-r-0">
								<i class="b-success update-icon ring"></i>
							</div>
							<div class="col p-l-5">
								<a href="#!"><h6>Miscellaneous</h6></a>
								<p class="text-muted m-b-0">Lorem ipsum dolor sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="card table-card">
			<div class="card-header">
				<h5>Register Users</h5>
				<div class="card-header-right">
					<ul class="list-unstyled card-option">
						<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
						<li><i class="feather icon-maximize full-card"></i></li>
						<li><i class="feather icon-minus minimize-card"></i></li>
						<li><i class="feather icon-refresh-cw reload-card"></i></li>
						<li><i class="feather icon-trash close-card"></i></li>
						<li><i class="feather icon-chevron-left open-card-option"></i></li>
					</ul>
				</div>
			</div>
			<div class="card-block p-b-0">
				<div class="table-responsive">
					<table class="table table-hover m-b-0">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Role</th>
								<th>Created At</th>
								<th>Updated At</th>
							</tr>
						</thead>
						<tbody>
							@if(count($allUsers) >0)
								@foreach($allUsers as $user)
								<tr>
									<td>{{ $user->username }}</td>
									<td>{{ $user->email }}</td>
									<td>@if ($user->role === 1) {{ 'Patient' }} @else {{ 'Expert'}} @endif</td>
									<td>{{ $user->created_at }}</td>
									<td>
										{{ $user->updated_at }}
										<!-- a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
										<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
										<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
										<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
										<a href="#!"><i class="fa fa-star f-12 text-default"></i></a> -->
									</td>
								</tr>
							@endforeach
								{{ $allUsers->links() }}
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
@endsection
