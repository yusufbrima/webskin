@extends('layouts.backend')
@section('title')
Expert
@endsection
@section('navigator')
<li class="breadcrumb-item"><a href="route('expert.index')">Expert</a> </li>
@endsection
@section('content')


<div class="row">
	<div class="col-xl-6">

		<div class="card">
			<div class="card-header">
				<h5>To Do Card List</h5>
			</div>
			<div class="card-block">
				<div class="form-material">
					<div class="right-icon-control">
						<form class="form-material">
							<div class="form-group form-primary">
								<input type="text" name="task-insert" class="form-control" required="">
								<span class="form-bar"></span>
								<label class="float-label">Create your task list</label>
							</div>
						</form>
						<div class="form-icon ">
							<button class="btn btn-success btn-icon  waves-effect waves-light" id="create-task">
								<i class="fa fa-plus"></i>
							</button>
						</div>
					</div>
				</div>
				<section id="task-container">
					<ul id="task-list">
						<li>
							<p>Lorem Ipsum Dolor Sit Amet</p>
						</li>
						<li>
							<p>Lorem Ipsum Dolor Sit Amet</p>
						</li>
						<li>
							<p>Lorem Ipsum Dolor Sit Amet</p>
						</li>
						<li>
							<p>Lorem Ipsum Dolor Sit Amet</p>
						</li>
						<li>
							<p>Lorem Ipsum Dolor Sit Amet</p>
						</li>
						<li>
							<p>Lorem Ipsum Dolor Sit Amet</p>
						</li>
					</ul>
					<div class="text-center">
						<button id="clear-all-tasks" class="btn btn-danger m-b-0" type="button">Clear All Tasks</button>
					</div>
				</section>
			</div>
		</div>

	</div>
	<div class="col-xl-6">

		<div class="card">
			<div class="card-header">
				<h5>To Do List
				</h5>
				<label class="label label-success">Today</label>
			</div>
			<div class="card-block">
				<div class="form-material">
					<div class="right-icon-control">
						<form class="form-material">
							<div class="form-group form-primary">
								<input type="text" name="task-insert" class="form-control add_task_todo" required="">
								<span class="form-bar"></span>
								<label class="float-label">Create your task list</label>
							</div>
						</form>
						<div class="form-icon ">
							<button class="btn btn-success btn-icon  waves-effect waves-light" id="add-btn">
								<i class="fa fa-plus"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="new-task">
					<div class="to-do-list">
						<div class="checkbox-fade fade-in-primary">
							<label class="check-task">
								<input type="checkbox" value="">
								<span class="cr">
									<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
								</span>
								<span>Lorem Ipsum Dolor Sit Amet</span>
							</label>
						</div>
						<div class="float-right">
							<a href="#" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
						</div>
					</div>
					<div class="to-do-list">
						<div class="checkbox-fade fade-in-primary">
							<label class="check-task">
								<input type="checkbox" value="">
								<span class="cr">
									<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
								</span>
								<span>Lorem Ipsum Dolor Sit Amet</span>
							</label>
						</div>
						<div class="float-right">
							<a href="#" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
						</div>
					</div>
					<div class="to-do-list">
						<div class="checkbox-fade fade-in-primary">
							<label class="check-task">
								<input type="checkbox" value="">
								<span class="cr">
									<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
								</span>
								<span>Lorem Ipsum Dolor Sit Amet</span>
							</label>
						</div>
						<div class="float-right">
							<a href="#" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
						</div>
					</div>
					<div class="to-do-list">
						<div class="checkbox-fade fade-in-primary">
							<label class="check-task">
								<input type="checkbox" value="">
								<span class="cr">
									<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
								</span>
								<span>Lorem Ipsum Dolor Sit Amet</span>
							</label>
						</div>
						<div class="float-right">
							<a href="#" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
						</div>
					</div>
					<div class="to-do-list">
						<div class="checkbox-fade fade-in-primary">
							<label class="check-task">
								<input type="checkbox" value="">
								<span class="cr">
									<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
								</span>
								<span>Lorem Ipsum Dolor Sit Amet</span>
							</label>
						</div>
						<div class="float-right">
							<a href="#" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
						</div>
					</div>
					<div class="to-do-list">
						<div class="checkbox-fade fade-in-primary">
							<label class="check-task">
								<input type="checkbox" value="">
								<span class="cr">
									<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
								</span>
								<span>Lorem Ipsum Dolor Sit Amet</span>
							</label>
						</div>
						<div class="float-right">
							<a href="#" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<div class="row">
	<div class="col-sm-12">

		<div class="card">
			<div class="card-header">
				<h5>To Do List in Modal</h5>
			</div>
			<div class="card-block">
				<section class="task-panel tasks-widget">
					<div class="panel-body">
						<div class="task-content">
							<div class="to-do-label">
								<div class="checkbox-fade fade-in-primary">
									<label class="check-task">
										<input type="checkbox" value="">
										<span class="cr">
											<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
										</span>
										<span class="task-title-sp">Lorem Ipsum Dolor Sit Amet</span>
										<span class="float-right hidden-phone">
											<i class="icofont icofont-ui-delete delete_todo"></i>
										</span>
									</label>
								</div>
							</div>
							<div class="to-do-label">
								<div class="checkbox-fade fade-in-primary">
									<label class="check-task">
										<input type="checkbox" value="">
										<span class="cr">
											<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
										</span>
										<span class="task-title-sp">Lorem Ipsum Dolor Sit Amet</span>
										<span class="float-right hidden-phone">
											<i class="icofont icofont-ui-delete delete_todo"></i>
										</span>
									</label>
								</div>
							</div>
							<div class="to-do-label">
								<div class="checkbox-fade fade-in-primary">
									<label class="check-task">
										<input type="checkbox" value="">
										<span class="cr">
											<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
										</span>
										<span class="task-title-sp">Lorem Ipsum Dolor Sit Amet</span>
										<span class="float-right hidden-phone">
											<i class="icofont icofont-ui-delete delete_todo"></i>
										</span>
									</label>
								</div>
							</div>
							<div class="to-do-label">
								<div class="checkbox-fade fade-in-primary">
									<label class="check-task">
										<input type="checkbox" value="">
										<span class="cr">
											<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
										</span>
										<span class="task-title-sp">Lorem Ipsum Dolor Sit Amet</span>
										<span class="float-right hidden-phone">
											<i class="icofont icofont-ui-delete delete_todo"></i>
										</span>
									</label>
								</div>
							</div>
						</div>
						<div>
							<a class="btn btn-primary btn-add-task waves-effect waves-light m-t-10" href="#" data-toggle="modal" data-target="#flipFlop"><i class="icofont icofont-plus"></i> Add New Tasks</a>
						</div>
					</div>
				</section>
			</div>
		</div>

	</div>
</div>

@endsection

@section('scripts')
@endsection