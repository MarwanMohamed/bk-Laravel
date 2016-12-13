<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Latest Projects</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
			<div class="row">
			@foreach($projects as $project)
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url({{$project->photo}})"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">{{ $project->name }}</h3>
								<h5 class="category">{{ $project->text }}</h5>
							</div>
						</div>
					</a>
				</div>
			@endforeach
				
			</div>
		</div>
	</div>