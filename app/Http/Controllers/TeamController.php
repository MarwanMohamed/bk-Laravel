<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.team.show', compact('team'))->withTitle('Team Work');
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
            'job'  => 'required',
            'info'  => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
            'fb'  => 'required',
            'google'  => 'required',
            'linked'  => 'required'
        ]);

        $photo = $request->file('photo');
        $team = new Team;

        $path = 'img/uploads';
        $photoName = $path . '/' . rand(1,9999999) .'_'. $photo->getClientOriginalName();
        $photo->move($path, $photoName);
 
        $team->name = $request->input('name');
        $team->job = $request->input('job');
        $team->info = $request->input('info');
        $team->photo = $photoName;
        $team->fb = $request->input('fb');
        $team->google = $request->input('google');
        $team->linked = $request->input('linked');
        $team->save();
        \Session::flash('message', 'Employee Successfuly Added');
        return redirect('admin/team');

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
        $employee = Team::findOrFail($id);
        return view('admin.team.edit', compact('employee'))->withTitle('Edit Employee');
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
            'job'  => 'required',
            'info'  => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
            'fb'  => 'required',
            'google'  => 'required',
            'linked'  => 'required'
        ]);

        $photo = $request->file('photo');
        $team = Team::findOrFail($id);

        if($photo !== null)  {
            if (file_exists($team->photo)) {
                unlink($team->photo);
            }
            $path = 'img/uploads';
            $photoName = $path . '/' . rand(1,9999999) .'_'. $photo->getClientOriginalName();
            $photo->move($path, $photoName);
        }else{
            $photoName = $team->photo;
        }

        $team->name = $request->input('name');
        $team->job = $request->input('job');
        $team->info = $request->input('info');
        $team->photo = $photoName;
        $team->fb = $request->input('fb');
        $team->google = $request->input('google');
        $team->linked = $request->input('linked');
        $team->save();
        \Session::flash('message', 'Employee Successfuly Edited');
        return redirect('admin/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::findOrFail($id)->delete();
        \Session::flash('message', 'Employee Successfuly Deleted');
        return redirect('admin/team');

    }
}
