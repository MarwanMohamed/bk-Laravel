@extends('admin.templet.AdminLayout')

@section('content')
<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Our Services</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li>Our Services</li>                          
					</ol>
				</div>
			</div>
				@if(Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
				@endif
			<section class="panel">
				<header class="panel-heading">
					Services
					<a href="services/add" class="btn btn-primary navbar-right"> Add Page</a>
				</header>
				<table class="table">
					<thead>
						<tr>
						<th>Id</th>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  $id = 1;?>
						@foreach($services as $servie)
						<tr>
							<td>{{ $id++ }}</td>
							<td>{{ $servie->name }}</td>
							<td>
								<a href="services/{{$servie->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
								<a onclick="return confirm('Are you sure ?');" href="services/{{$servie->id}}/delete" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
							</td>
						</tr>
						@endforeach	
					</tbody>
				</table>
			</section>

		</section>
	</section>
</section>		

@stop