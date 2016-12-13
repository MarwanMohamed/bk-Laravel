@extends('admin.templet.AdminLayout')

@section('content')

<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-code"></i> Project</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li><i class="fa fa-code"></i>Project</li>                          
						<li><i class="fa fa-plus"></i>Add</li>                          
					</ol>
				</div>
			</div>
			

			<section class="panel">
				<header class="panel-heading">
					Add Elements
				</header>
				<div class="panel-body">
					<form role='form' method="post" action="add" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
		            	
		            	<div class="form-group">
		                 <label for="photo">Photo:</label>
		                 <input type="file" id="photo" name="photo">
		            	</div>

						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" name="name" id='name' class="form-control">
						</div>

						<div class="form-group">
							<label for="text">Text:</label>
							<input type="text" name="text" id='text' class="form-control">
						</div>
		            <button type="submit" class="btn btn-primary">Add Project</button>
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