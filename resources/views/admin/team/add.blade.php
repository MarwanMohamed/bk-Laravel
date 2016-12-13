@extends('admin.templet.AdminLayout')

@section('content')

<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user"></i> Employee</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li><i class="fa fa-user"></i>Employee</li>                          
						<li><i class="fa fa-plus"></i>Add</li>                          
					</ol>
				</div>
			</div>
			

			<section class="panel">
				<header class="panel-heading">
					Add Employee
				</header>
				<div class="panel-body">
					<form role='form' method="post" action="add" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
		            	
		            	<div class="form-group">
		                 <label for="photo">Photo input</label>
		                 <input type="file" id="photo" name="photo">
		            	</div>

						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" name="name" id='name' class="form-control">
						</div>

						<div class="form-group">
							<label for="job">Job:</label>
							<input type="text" name="job" id='job' class="form-control" ">
						</div>

						<div class="form-group">
							<label for="info">Info:</label>
							<textarea class="form-control" name="info" id="info"></textarea>
						</div>

						<div class="form-group">
							<label for="linked">LinkedIn:</label>
							<input type="text" name="linked" id='linked' class="form-control">
						</div>

						<div class="form-group">
							<label for="google">Google Plus:</label>
							<input type="text" name="google" id='google' class="form-control">
						</div>

						<div class="form-group">
							<label for="fb">Face book:</label>
							<input type="text" name="fb" id='fb' class="form-control">
						</div>

		            	<button type="submit" class="btn btn-primary">Add Employee</button>
					</form>
				</div>
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
			</section>
		</section>
	</section>  
</section>

@stop