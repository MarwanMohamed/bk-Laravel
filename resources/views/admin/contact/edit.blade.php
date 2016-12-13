@extends('admin.templet.AdminLayout')

@section('content')

<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-phone"></i> Contact Us</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li><i class="fa fa-phone"></i>Contact Us</li>                         
						<li><i class="fa fa-edit"></i>Edit</li>                          
					</ol>
				</div>
			</div>

			<section class="panel">
				<header class="panel-heading">
					Edit Contact Us
				</header>
				<div class="panel-body">
					<form role='form' method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{$contact->id}}">
						

						<div class="form-group">
							<label for="details">Details:</label>
							<textarea class="form-control" name="details" id="details">{{ $contact->details }}</textarea>
						</div>

						<div class="form-group">
							<label for="address">Address:</label>
							<input type="text" name="address" id="address" value="{{ $contact->address }}" class="form-control">
						</div>

						<div class="form-group">
							<label for="phone">Phone:</label>
							<input type="number" name="phone" id="phone" value="{{ $contact->phone }}" class="form-control">
						</div>

						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" name="email" id="email" value="{{ $contact->email }}" class="form-control">
						</div>

		            	<button type="submit" class="btn btn-primary">Edit Contact</button>
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