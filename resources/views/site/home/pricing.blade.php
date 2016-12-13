<div id="fh5co-pricing-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Pricing</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
			<div class="row">
				<div class="pricing">
				@foreach($plans as $plan)
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">{{$plan->name}}</h2>
							<div class="price"><sup class="currency">L.E</sup>{{$plan->price}}<small>/month</small></div>
							<p>{{$plan->text}}</p>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>
				@endforeach()
				</div>
			</div>
		</div>
	</div>