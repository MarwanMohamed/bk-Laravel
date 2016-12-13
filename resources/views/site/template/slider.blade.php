<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">

			@foreach($sliders as $slider)
		   	<li style="background-image: url(/{{$slider->photo}});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>{{$slider->text}}</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	@endforeach()
		  	</ul>
	  	</div>
	</aside>