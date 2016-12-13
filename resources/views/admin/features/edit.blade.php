@extends('admin.templet.AdminLayout')

@section('content')

<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="glyphicon glyphicon-picture"></i> Features</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li><i class="glyphicon glyphicon-picture"></i>Features</li>                          
						<li><i class="fa fa-edit"></i>Edit</li>                          
					</ol>
				</div>
			</div>

			<section class="panel">
				<header class="panel-heading">
					Edit Feature
				</header>
				<div class="panel-body">

					<form role='form' method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{$feature->id}}">

						<div class="form-group">
							<label for="name">Name:</label>
							<input type="name" name="name" id='name' value="{{$feature->name}}" class="form-control">
						</div>

	            		<div class="form-group">
							<label for="text">Text:</label>
							<input type="text" name="text" id='text' value="{{$feature->text}}" class="form-control">
						</div>


						<div class="form-group">
							<label for="photo">Photo:</label>
							<button class="btn btn-default" name="photo" data-iconset="glyphicon" data-icon="{{$feature->photo}}" role="iconpicker"></button>
						</div>

		            	<button type="submit" class="btn btn-primary">Edit Feature</button>
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