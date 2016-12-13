<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Partner;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.show', compact('partners'))->withTitle('Partners');
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
            'name'  => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
        ]);
        $photo = $request->file('photo');
        $partner = new Partner;

        if($photo !== null)  {
            if (file_exists($partner->photo)) {
                unlink($partner->photo);
            }
            $path = 'img/uploads';
            $photoName = $path . '/' . rand(1,9999999) .'_'. $photo->getClientOriginalName();
            $photo->move($path, $photoName);
        }else{
            $photoName = $partner->photo;
        }

        $partner->name = $request->input('name');
        $partner->photo = $photoName;
        $partner->save();
        \Session::flash('message', 'Partner Successfuly Added');
        return redirect('admin/partners');
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
        $partner = Partner::findOrFail($id);
        return view('admin.partners.edit', compact('partner'))->withTitle('Edit Partner');
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
            'name'  => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
        ]);
        $photo = $request->file('photo');
        $partner = Partner::findOrFail($id);

        if($photo !== null)  {
            if (file_exists($partner->photo)) {
                unlink($partner->photo);
            }
            $path = 'img/uploads';
            $photoName = $path . '/' . rand(1,9999999) .'_'. $photo->getClientOriginalName();
            $photo->move($path, $photoName);
        }else{
            $photoName = $partner->photo;
        }

        $partner->name = $request->input('name');
        $partner->photo = $photoName;
        $partner->save();
        \Session::flash('message', 'Partner Successfuly Edited');
        return redirect('admin/partners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partner::findOrFail($id)->delete();
        \Session::flash('message', 'Partner Successfuly Deleted');
        return redirect('admin/partners');
    }
}
