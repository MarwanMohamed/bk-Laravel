@extends('admin.templet.AdminLayout')

@section('content')
<section id="container" class="">
	<section id="main-content">
		<section class="wrapper">            
			<!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-code"></i> Follow Us</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
						<li>Follow Us</li>                          
					</ol>
				</div>
			</div>
				@if(Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
				@endif
			<section class="panel">
				<header class="panel-heading">
					Follow Us
				</header>
				<table class="table">
					<thead>
						<tr>
						<th>Id</th>
							<th>Facebook</th>
							<th>Twiter</th>
							<th>Instagram</th>
							<th>Google</th>
							<th>About</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  $id = 1;?>
					@foreach($links as $link)
						<tr>
							<td>{{ $id++}}</td>
							<td>{{ $link->fb }}</td>
							<td>{{ $link->tw }}</td>
							<td>{{ $link->ins }}</td>
							<td>{{ $link->google }}</td>
							<td>{{ $link->about }}</td>
							<td>
								<a href="social/{{ $link->id }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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