<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $about = About::get()->last();
        return view('admin.about.edit', compact('about'))->withTitle('Edit About');
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'history'  => 'required',
            'company'  => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
        ]);

        $photo = $request->file('photo');
        $about = About::get()->last();
        if($photo !== null)  {
            if (file_exists($about->photo)) {
                unlink($about->photo);
            }
            $path = 'img/uploads';
            $name = $path . '/' . rand(1,9999999) .'_'. $photo->getClientOriginalName();
            $photo->move($path, $name);
        }else{
            $name = $about->photo;
        }
        $about->history = $request->input('history');
        $about->company = $request->input('company');
        $about->photo = $name;
        $about->save();
        \Session::flash('message', 'About Successfuly Edited');
        return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
