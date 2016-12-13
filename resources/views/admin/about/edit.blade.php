@extends('admin.templet.AdminLayout')

@section('content')

<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="glyphicon glyphicon-picture"></i> About</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li>About</li>                          
						<li><i class="fa fa-edit"></i>Edit</li>                          
					</ol>
				</div>
			</div>
				@if(Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
				@endif
			<section class="panel">
				<header class="panel-heading">
					Edit About
				</header>
				<div class="panel-body">
					<form role='form' action="about/edit" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{$about->id}}">
						<div class="form-group">
							<label for="text">History:</label>
							<textarea class="form-control" name="history">{{$about->history}}</textarea> 
						</div>

		            	<div class="form-group">
		                 <label for="photo">Photo input</label>
		                 <input type="file" id="photo" name="photo">
		            	</div>
		            	<img src="/{{$about->photo}}" width="200" height="100">

		            	<div class="form-group">
							<label for="text">Company:</label>
							<textarea class="form-control" name="company">{{$about->company}}</textarea> 
						</div>

		            	<button type="submit" class="btn btn-primary">Edit</button>
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