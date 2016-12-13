<?php

//admin.login
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function() {

	Route::get('/', function () {
    	return view('admin.dashboard')->withTitle('Dashboard');
	});

	// Slider Page
	Route::get('/slider', 'SliderController@index');
	Route::get('/slider/add', function () {
    	return view('admin.slider.add')->withTitle('Slider');
	});	
	Route::post('slider/add', 'SliderController@store');	
	Route::get('/slider/{id}/edit', 'SliderController@edit');
	Route::post('slider/{id}/edit', 'SliderController@update');	
	Route::get('slider/{id}/delete', 'SliderController@destroy');	

	// Features Page
	Route::get('/features', 'FeaturesController@index');
	
	Route::get('/features/add', function () {
    	return view('admin.features.add')->withTitle('Add Features ');
	});	
	Route::post('features/add', 'FeaturesController@store');
	Route::get('features/{id}/delete', 'FeaturesController@destroy');	
	Route::get('features/{id}/edit', 'FeaturesController@edit');	
	Route::post('features/{id}/edit', 'FeaturesController@update');	


	// Projects Page
	Route::get('/projects', 'ProjectsController@index');
	Route::get('/projects/add', function () {
    	return view('admin.projects.add')->withTitle('Projects');
	});	
	Route::post('projects/add', 'ProjectsController@store');	
	Route::get('/projects/{id}/edit', 'ProjectsController@edit');
	Route::post('projects/{id}/edit', 'ProjectsController@update');	
	Route::get('projects/{id}/delete', 'ProjectsController@destroy');

	// Pleasure Page
	Route::get('/pleasure', 'PleasureController@index');	
	Route::post('pleasure/add', 'PleasureController@store');	
	Route::get('/pleasure/{id}/edit', 'PleasureController@edit');
	Route::post('pleasure/{id}/edit', 'PleasureController@update');	
	Route::get('pleasure/{id}/delete', 'PleasureController@destroy');

	// Pricing Page
	Route::get('/plans', 'PricingController@index');
	Route::get('/plan/add', function () {
    	return view('admin.pricing.add')->withTitle('Pricing');
	});	
	Route::post('plan/add', 'PricingController@store');	
	Route::get('/plan/{id}/edit', 'PricingController@edit');
	Route::post('plan/{id}/edit', 'PricingController@update');	
	Route::get('plan/{id}/delete', 'PricingController@destroy');	

	// Footer Page
	Route::get('/aboutUs', 'AboutUsController@index');
	Route::post('/aboutUs/edit', 'AboutUsController@update');
	//Social Links
	Route::get('/social', 'SocialController@index');
	Route::get('/social/{id}/edit', 'SocialController@edit');
	Route::post('/social/{id}/edit', 'SocialController@update');

	// Our Services
	Route::get('/services', 'ServicesController@index');
	Route::get('/services/add', function () {
    	return view('admin.services.add')->withTitle('Services');
	});
	Route::post('services/add', 'ServicesController@store');
	Route::get('/services/{id}/edit', 'ServicesController@edit');
	Route::post('/services/{id}/edit', 'ServicesController@update');
	Route::get('/services/{id}/delete', 'ServicesController@destroy');
	
	// About Page
	Route::get('/about', 'AboutController@index');
	Route::post('/about/edit', 'AboutController@update');

	// Team Page
	Route::get('/team', 'TeamController@index');
	Route::get('/team/add', function () {
    	return view('admin.team.add')->withTitle('Team Work');
	});
	Route::post('team/add', 'TeamController@store');
	Route::get('/team/{id}/edit', 'TeamController@edit');
	Route::post('/team/{id}/edit', 'TeamController@update');
	Route::get('/team/{id}/delete', 'TeamController@destroy');

	// partners Page
	Route::get('/partners', 'PartnersController@index');
	Route::get('/partners/add', function () {
    	return view('admin.partners.add')->withTitle('Partners');
	});
	Route::post('partners/add', 'PartnersController@store');
	Route::get('/partners/{id}/edit', 'PartnersController@edit');
	Route::post('/partners/{id}/edit', 'PartnersController@update');
	Route::get('/partners/{id}/delete', 'PartnersController@destroy');

	// Contact Page
	Route::get('/contact', 'ContactController@index');
	Route::get('/contact/{id}/edit', 'ContactController@edit');
	Route::post('/contact/{id}/edit', 'ContactController@update');
});


//Site 
Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/academy', 'SiteController@academy');
Route::get('/marketing', 'SiteController@marketing');
Route::get('/event', 'SiteController@event');
Route::get('/contact', 'SiteController@contact');

Route::post('/contact', 'ContactController@Mail');

Route::get('/services/{name}', 'ServicesController@show');

