<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.show', compact('services'))->withTitle('Services');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'editor1' => 'required',
        ]);

        $page = new Service;
        $page->name = $request->input('name');
        $page->content = $request->input('editor1');
        $page->save();
        \Session::flash('message', 'Page Successfuly Added');
        return redirect('admin/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {   
        $name = str_replace('-', ' ', $name);
        $service = Service::where('name' , $name)->first();
        return view('site.showService', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Service::findOrFail($id);
        return view('admin.services.edit', compact('page'))->withTitle('Edit Page');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'name' => 'required',
            'editor1' => 'required',
        ]);

        $page = Service::findOrFail($id);
        $page->name = $request->input('name');
        $page->content = $request->input('editor1');
        $page->save();
        \Session::flash('message', 'Page Successfuly Edited');
        return redirect('admin/services');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Service::findOrFail($id)->delete();
        \Session::flash('message', 'Page Successfuly Deleted');
        return redirect('admin/services');
    }
}
