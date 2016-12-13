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
							<th>Details</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{ $contact->details }}</td>
							<td>{{ $contact->address }}</td>
							<td>{{ $contact->phone }}</td>
							<td>{{ $contact->email }}</td>
							<td>
								<a href="contact/{{ $contact->id }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</section>

		</section>
	</section>
</section>		

@stop