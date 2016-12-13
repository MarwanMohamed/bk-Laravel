@extends('admin.templet.AdminLayout')

@section('content')
<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Partners</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li>Partners</li>                          
					</ol>
				</div>
			</div>
				@if(Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
				@endif
			<section class="panel">
				<header class="panel-heading">
					Partners
				</header>
				<table class="table">
					<thead>
						<tr>
						<th>Id</th>
							<th>Name</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  $id = 1;?>
						@foreach($partners as $partner)
						<tr>
							<td>{{$id++}}</td>
							<td>{{$partner->name}}</td>
							<td><img src="/{{$partner->photo}}" width="150" height="100"></td>
							
							<td>
								<a href="partners/{{$partner->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
								<a onclick="return confirm('Are you sure ?');" href="partners/{{$partner->id}}/delete" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
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