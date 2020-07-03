@extends('layouts.backend')
@section('title')
Please Update your profile
@endsection
@section('navigator')
<li class="breadcrumb-item"><a href="route('patients.create')"></a>Update your profile </li>
@endsection
@section('styles')

@endsection
@section('content')
<div class="row">

	<div class="col-sm-12">

		<div class="card">
			<div class="card-header">
				<h5>Update your profile</h5>
				<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
			</div>
			<div class="card-block">
				<form action="">
					@csrf
					<div class="row">
						<div class="col-sm-12 col-xl-4 m-b-30">
							<h4 class="sub-title">First Name</h4>
							<input type="text" class="form-control" required placeholder="first name" maxlength="50">
						</div>
						<div class="col-sm-12 col-xl-4 m-b-30">
							<h4 class="sub-title">Middle  Name</h4>
							<input type="text" class="form-control" placeholder="middle name" maxlength="50">
						</div>
						<div class="col-sm-12 col-xl-4 m-b-30">
							<h4 class="sub-title">Last Name</h4>
							<input type="text" class="form-control" required placeholder="last name" maxlength="50">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-xl-9 m-b-90">
							<h4 class="sub-title">Address</h4>
							<input type="text" class="form-control" name="address" required placeholder="address" maxlength="255">
						</div>
						<div class="col-sm-12 col-xl-3 m-b-30">
							<h4 class="sub-title">Contact</h4>
							<input type="tel" class="form-control" name="contact" required placeholder="contact" maxlength="12">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-xl-4 m-b-30">
							<h4 class="sub-title">Profile Photo</h4>
							<input type="file" class="form-control" required name= "profileurl" accept="image/*">
						</div>
						<div class="col-sm-12 col-xl-4 m-b-30">
							<h4 class="sub-title">Alternate Email</h4>
							<input type="email" class="form-control" name="altemail" placeholder="Alternate email" maxlength="50">
						</div>
						<div class="form-group row">
							<h4 class="sub-title"></h4>
							<label class="col-sm-2"></label>
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary m-b-0">Submit</button>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>

	</div>

</div>
@endsection

@section('scripts')
@endsection