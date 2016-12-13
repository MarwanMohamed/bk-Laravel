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
						<li>Services</li>                          
						<li><i class="fa fa-plus"></i>Add</li>                          
					</ol>
				</div>
			</div>
			

			<section class="panel">
				<header class="panel-heading">
					Add Page
				</header>
				<div class="panel-body">
					<form role='form' method="post" action="add" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" name="name" id='name' class="form-control">
						</div>

	            		<div class="row">
                        
                          <!-- CKEditor -->
                          <div class="col-lg-12">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Content
                                  </header>
                                  <div class="panel-body">
                                      <div class="form">
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2">Content Edotor</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                                                  </div>
                                              </div>
                                      </div>
                                  </div>
                              </section>
                          </div>
                      </div>




		            	<button type="submit" class="btn btn-primary">Add Page</button>
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