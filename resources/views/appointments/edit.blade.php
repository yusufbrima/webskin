@extends('layouts.backend')
@section('title')
    Edit Expert
@endsection
@section('navigator')
	<li class="breadcrumb-item"><a href="route('expert.edit')">Expert Edit</a> </li>
@endsection
@section('content')
<div class="row">
	<div class="col-sm-12">

		<div class="card">
			<div class="card-header">
				<h5>Availability</h5>
				<span>Please Add Appointment Schedules</span>
			</div>
			<div class="card-block">
				<div class="row">
					<div class="col-sm-12 col-xl-4 m-b-30">
						<h4 class="sub-title">Date</h4>
						<input class="form-control fill" type="date" id="datepicker-dep">
					</div>
					<div class="col-sm-12 col-xl-4 m-b-30">
						<h4 class="sub-title">Month</h4>
						<input class="form-control" type="month">
					</div>
					<div class="col-sm-12 col-xl-4 m-b-30">
						<h4 class="sub-title">Week</h4>
						<input class="form-control" type="week">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-xl-4 m-b-30">
						<h4 class="sub-title">Date-time-local</h4>
						<input class="form-control" type="datetime-local">
					</div>
					<div class="col-sm-12 col-xl-4">
						<h4 class="sub-title">Time</h4>
						<input class="form-control" type="time">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
@endsection