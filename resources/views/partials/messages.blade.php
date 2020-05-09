@if(count($errors) >0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  <strong>{{ $error }}</strong> 
		</div>
	@endforeach
@endif


@if(session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  <strong>{{ session('success') }}</strong> 
		</div>
@endif

@if(session('error'))
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  <strong>{{ session('error') }}</strong> 
		</div>
@endif