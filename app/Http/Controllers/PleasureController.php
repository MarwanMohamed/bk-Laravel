<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pleasure;

class PleasureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pleasures = Pleasure::all();
        return view('admin.pleasure.show', compact('pleasures'))->withTitle('Pleasure');
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
        $pleasure = Pleasure::findOrFail($id);
        return view('admin.pleasure.edit', compact('pleasure'))->withTitle('Pleasure Edit');
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
            'text' => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
        ]);

        $pleasure = Pleasure::findOrFail($id);

        $photo = $request->file('photo');
        if($photo !== null)  {
            if(file_exists($pleasure->photo)) {
                unlink($pleasure->photo);
            }
            $path = 'img/uploads';
            $photoName = $path . '/' . rand(1,9999999) .'_'. $photo->getClientOriginalName();
            $photo->move($path, $photoName);
        }else{
            $photoName = $pleasure->photo;
        }

        $pleasure->text = $request->input('text');
        $pleasure->photo = $photoName;
        $pleasure->save();
        \Session::flash('message', 'Service Successfuly Edited');
        return redirect('admin/pleasure');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pleasure = Pleasure::findOrFail($id);
        if(file_exists($pleasure->photo)) {
            unlink($pleasure->photo);
        }
        $pleasure->delete();
        \Session::flash('message', 'Service Successfuly Deleted');
        return redirect('admin/pleasure');
    }
}
