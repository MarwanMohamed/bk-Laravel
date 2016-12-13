    <section id="suc-partners" class="animate-plus" data-animations="fadeInUp" data-animation-when-visible="true">
        <h2 class="text-center title-sec">Partners</h2>
        <div class="slid-part container">
        	<div id="owl-demo" class="owl-carousel">
        	@foreach($partners as $partner)
            	<div class="item"><img src="{{ $partner->photo }}" alt="{{ $partner->name }}"></div>			
            @endforeach()
            </div>
        </div>
    </section>
