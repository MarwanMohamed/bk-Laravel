<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="/"><img src="site/images/logo.png"></a></h1>
				<nav role="navigation" class="navbar">
					<ul>
						<li class="{{ (Request::is('/')) ? 'active' :'' }}"><a href="{{ Url('/') }}">Home</a></li>
						<li class="{{ (Request::is('about')) ? 'active' :'' }}"><a href="{{ Url('/about') }}">About</a></li>
						<li class="{{ (Request::is('academy')) ? 'active' : '' }}"><a href="{{ Url('/academy') }}">Academy</a></li>
						<li class="{{ (Request::is('marketing')) ? 'active' :'' }}"><a href="{{ Url('/marketing') }}">Marketing</a></li>
						<li class="{{ (Request::is('event')) ? 'active':'' }}"><a href="{{ Url('/event') }}">Event</a></li>
						<li class="{{ (Request::is('contact')) ? 'active': '' }}"><a href="{{ Url('/contact') }}">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	