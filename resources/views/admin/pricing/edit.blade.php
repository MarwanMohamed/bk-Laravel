@extends('admin.templet.AdminLayout')

@section('content')

<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="glyphicon glyphicon-picture"></i> Pricing</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li><i class="glyphicon glyphicon-picture"></i>Pricing</li>                          
						<li><i class="fa fa-edit"></i>Edit</li>                          
					</ol>
				</div>
			</div>

			<section class="panel">
				<header class="panel-heading">
					Edit Plan
				</header>
				<div class="panel-body">

					<form role='form' method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{$plan->id}}">

						<div class="form-group">
							<label for="name">Name:</label>
							<input type="name" name="name" id='name' value="{{$plan->name}}" class="form-control">
						</div>

	            		<div class="form-group">
							<label for="text">price:</label>
							<input type="number" name="price" id='price' value="{{$plan->price}}" class="form-control">
						</div>

						<div class="form-group">
							<label for="text">Text:</label>
							<input type="text" name="text" id='text' value="{{$plan->text}}" class="form-control">
						</div>

		            	<button type="submit" class="btn btn-primary">Edit Plan</button>
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