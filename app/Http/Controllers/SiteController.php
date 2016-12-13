<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Feature;
use App\Project;
use App\Partner;
use App\Service;
use App\Contact;
use App\Footer;
use App\Slider;
use App\About;
use App\Team;
use App\Plan;

class SiteController extends Controller
{
    public function index() {

        $sliders  = Slider::all();
        $features = Feature::all();
        $plans    = Plan::all();
        $projects = Project::all();
        $partners = Partner::all();
        $footer   = Footer::first();
        $services = Service::all();
        return view('site.index', compact('sliders', 'features', 'plans', 'projects', 'partners', 'footer', 'services'));
    }

    public function about()
    {
        $sliders  = Slider::all();
        $footer   = Footer::first();
        $services = Service::all();
        $about   = About::get()->first();
        $teams   = Team::all();
        return view('site.about', compact('sliders', 'footer', 'services', 'about', 'teams'))->withTitle('About Bk');
    }

    public function academy()
    {
        $sliders  = Slider::all();
        $footer   = Footer::first();
        $services = Service::all();
        return view('site.academy', compact('sliders', 'footer', 'services'))->withTitle('Bk Academy');
    }

    public function marketing()
    {
        $sliders = Slider::all();
        $footer   = Footer::first();
        $services = Service::all();
        return view('site.marketing', compact('sliders','footer', 'services'))->withTitle('Bk Marketing');
    }

    public function event()
    {
        $sliders = Slider::all();
        $footer   = Footer::first();
        $services = Service::all();
        return view('site.event', compact('sliders','footer', 'services'))->withTitle('Bk Event');
    }

    public function contact()
    {
        $sliders  = Slider::all();
        $footer   = Footer::first();
        $services = Service::all();
        $contact  = Contact::get()->first();
        return view('site.contact', compact('sliders','footer', 'services', 'contact'))->withTitle('Contact Bk');
    }

}
