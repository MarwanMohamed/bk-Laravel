<div class="fh5co-contact animate-box">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-md-push-2 animate-box">
				<h2>Contact Details</h2>
				<p>{{$contact->details}}</p><br><br>

			</div>
			<div class="col-md-3">
				<h3>Contact Info.</h3>
				<ul class="contact-info">
					<li><i class="icon-map"></i>{{$contact->address}}</li>
					<li><i class="icon-phone"></i>{{$contact->phone}}</li>
					<li><i class="icon-envelope"></i><a target="_blank">{{$contact->email}}</a></li>
				</ul>
			</div>
			<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<div class="row">

					<form action="{{ Url('/contact') }}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Name" type="text" name="name" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Email"  type="email" name="email" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" cols="30" rows="7" placeholder="Message" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<button class="btn btn-primary" type="submit" >Send Message</button> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="site/js/google_map.js"></script>