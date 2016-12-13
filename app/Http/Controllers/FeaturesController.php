<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Feature;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $features = Feature::all();
        return view('admin.features.show', compact('features'))->withTitle('Features');
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
        $this->validate($request ,[
            'name' => 'required',
            'text' => 'required',
            'photo' => 'required'
        ]);

        $name  = $request->input('name');
        $text  = $request->input('text');
        $photo = $request->input('photo');
        $feature = new Feature;
        $feature->name = $name;
        $feature->text = $text;
        $feature->photo = $photo;
        $feature->save();

        \Session::flash('message', 'Feature Successfuly Added');
        return redirect('admin/features');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $feature = Feature::findOrFail($id);
        return view('admin.features.edit', compact('feature'))->withTitle('Features Edit');
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
        $this->validate($request ,[
            'name' => 'required',
            'text' => 'required',
            'photo' => 'required'
        ]);

        $name  = $request->input('name');
        $text  = $request->input('text');
        $photo = $request->input('photo');

        $feature = Feature::findOrFail($id);
        $feature->name = $name;
        $feature->text = $text;
        $feature->photo = $photo;
        $feature->save();

        \Session::flash('message', 'Feature Successfuly Eddited');
        return redirect('admin/features');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = Feature::findOrFail($id)->delete();
        \Session::flash('message', 'Feature Successfuly Deleted');
        return redirect('admin/features');    
    }
}
