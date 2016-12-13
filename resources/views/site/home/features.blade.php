<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Our Awesome Features</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
			<div class="row">
				@foreach($features as $feature)
					<div class="col-md-4 animate-box">
						<div class="services">
						<i class="glyphicon {{$feature->photo}}"></i>
							<div class="desc">
								<h3>{{$feature->name}}</h3>
								<p>{{$feature->text}}</p>
							</div>
						</div>
					</div>
				@endforeach

			</div>
		</div>
	</div>