<div id="fh5co-services-section" class="fh5co-light-grey-section pleasureee">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Our pleasure to serve you</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				@foreach(App\Pleasure::all() as $service)
				<div class="col-md-4 text-center item-block animate-box">
					<img src="{{$service->photo}}" alt="bk">
					<p>{{$service->text}}</p>
					<p><a href="/{{$service->name}}" class="btn btn-primary btn-outline with-arrow">More <i class="icon-arrow-right"></i></a></p>
				</div>
				@endforeach
			</div>
		</div>
	</div>