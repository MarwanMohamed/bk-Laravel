@extends('admin.templet.AdminLayout')

@section('content')
<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-code"></i> Projects</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li><i class="fa fa-code"></i>Projects</li>                          
					</ol>
				</div>
			</div>
				@if(Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
				@endif
			<section class="panel">
				<header class="panel-heading">
					Projects
				</header>
				<table class="table">
					<thead>
						<tr>
						<th>Id</th>
							<th>Photo</th>
							<th>Name</th>
							<th>Text</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  $id = 1;?>
						@foreach($projects as $project)
						<tr>
							<td>{{$id++}}</td>
							<td><img src="/{{$project->photo}}" width="150" height="100"></td>
							<td>{{$project->name}}</td>
							<td>{{$project->text}}</td>
							<td>
								<a href="projects/{{$project->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
								<a onclick="return confirm('Are you sure ?');" href="projects/{{$project->id}}/delete" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
							</td>
						</tr>
						@endforeach()
					</tbody>
				</table>
			</section>

		</section>
	</section>
</section>		

@stop