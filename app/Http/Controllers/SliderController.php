<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id','DESC')->get();
        return view('admin.slider.show',compact('sliders'))->withTitle('Slider');
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
            'text'  => 'required',
            'photo' => 'mimes:jpg,jpeg,png|required',
        ]);

        $text = $request->input('text');
        $photo = $request->file('photo');
        $path = 'img/uploads';
        $name = $path . '/' . rand(1,9999999) .'_'. $photo->getClientOriginalName();
        $photo->move($path, $name);
        $slider = new Slider;
        $slider->text = $text;
        $slider->photo = $name;
        $slider->save();
        \Session::flash('message', 'Slider Successfuly Added');
        return redirect('admin/slider');
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
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'))->withTitle('Edit');
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
            'text'  => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
        ]);
        $text = $request->input('text');
        $photo = $request->file('photo');
        $slider = Slider::findOrFail($id);

        if($photo !== null)  {
            if (file_exists($slider->photo)) {
                unlink($slider->photo);
            }
            $path = 'img/uploads';
            $name = $path . '/' . rand(1,9999999) .'_'. $photo->getClientOriginalName();
            $photo->move($path, $name);
        }else{
            $name = $slider->photo;
        }

        $slider->text = $text;
        $slider->photo = $name;
        $slider->save();
        \Session::flash('message', 'Slider Successfuly Edited');
        return redirect('admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        if (file_exists($slider->photo)) {
                unlink($slider->photo);
            }
        $slider->delete();
        \Session::flash('message', 'Slider Successfuly Deleted');
        return redirect('admin/slider');
    }
}
