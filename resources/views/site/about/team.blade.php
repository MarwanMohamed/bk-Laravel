<div class="fh5co-team fh5co-light-grey-section">
		<div class="container">
			
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
						<h2>The Team</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
					@foreach($teams as $team)
					<div class="col-md-4 fh5co-staff text-center animate-box">
						<img src="{{$team->photo}}" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>{{$team->name}}</h3>
						<h4>{{$team->job}}</h4>
						<p>{{$team->info}}</p>
						<ul class="fh5co-social">
							<li><a href="{{$team->fb}}" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="{{$team->linked}}" target="_blank"><i class="icon-linkedin"></i></a></li>
							<li><a href="{{$team->google}}" target="_blank"><i class="icon-google-plus"></i></a></li>
						</ul>
					</div>
					@endforeach
				</div>
		</div>
	</div>