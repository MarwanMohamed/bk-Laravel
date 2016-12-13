@extends('admin.templet.AdminLayout')

@section('content')
<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-users"></i> Team Work</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li><i class="fa fa-users"></i>Team Work</li>                          
					</ol>
				</div>
			</div>
				@if(Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
				@endif
			<section class="panel">
				<header class="panel-heading">
					Employees
				</header>
				<table class="table">
					<thead>
						<tr>
						<th>Id</th>
							<th>Photo</th>
							<th>Name</th>
							<th>Job</th>
							<th>Info</th>
							<th>LinkedIn</th>
							<th>Googel Plus</th>
							<th>Face book</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  $id = 1;?>
						@foreach($team as $emplpyee)
						<tr>
							<td>{{$id++}}</td>
							<td><img src="/{{$emplpyee->photo}}" width="150" height="100"></td>
							<td>{{$emplpyee->name}}</td>
							<td>{{$emplpyee->job}}</td>
							<td>{{$emplpyee->info}}</td>
							<td>{{$emplpyee->linked}}</td>
							<td>{{$emplpyee->google}}</td>
							<td>{{$emplpyee->fb}}</td>
							<td>
								<a href="team/{{$emplpyee->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
								<a onclick="return confirm('Are you sure ?');" href="team/{{$emplpyee->id}}/delete" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
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