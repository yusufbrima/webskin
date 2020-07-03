@extends('layouts.backend')
@section('title')
Starter Page
@endsection
@section('navigator')
<li class="breadcrumb-item"><a href="/blank">Blank</a> </li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
		<h5>Create </h5>
		<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
	</div>
	<div class="card-block">
		<form id="second" action="/" method="post" >
			<div class="form-group row has-error">
				<label class="col-sm-2 col-form-label">Enter Username</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="usernameP" name="Username" placeholder="Enter Username">
					<span class="messages popover-valid"><i class="text-danger error icofont icofont-close-circled" data-toggle="tooltip" required data-placement="top" data-trigger="hover" title="" data-original-title="Username can't be blank"></i></span>
				</div>
			</div>
			<div class="form-group row has-error">
				<label class="col-sm-2 col-form-label">Enter Email-id</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required="true" id="EmailP" name="Email" placeholder="Enter email id">
					<span class="messages popover-valid"><i class="text-danger error icofont icofont-close-circled" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="" data-original-title="Email can't be blank"></i></span>
				</div>
			</div>
			<div class="row">
				<label class="col-sm-2"></label>
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary m-b-0">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@section('scripts')
@endsection