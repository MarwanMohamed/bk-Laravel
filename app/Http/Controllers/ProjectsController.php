<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $projects = Project::all();
        return view('admin.projects.show', compact('projects'))->withTitle('Latest Projects');
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
            'name'  => 'required',
            'photo' => 'mimes:jpg,jpeg,png|required',
        ]);

        $text = $request->input('text');
        $name = $request->input('name');
        $photo = $request->file('photo');
        $path = 'img/uploads';
        $photoName = $path . '/' . rand(1,9999999) .'_'. $photo->getClientOriginalName();
        $photo->move($path, $photoName);

        $project = new Project;
        $project->text = $text;
        $project->name = $name;
        $project->photo = $photoName;
        $project->save();
        \Session::flash('message', 'Project Successfuly Added');
        return redirect('admin/projects');
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
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'))->withTitle('Projects Edit');
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
            'name'  => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
        ]);
        
        $text = $request->input('text');
        $name = $request->input('name');
        $photo = $request->file('photo');
        $project = Project::findOrFail($id);
        
        if($photo !== null)  {
            if(file_exists($project->photo)) {
                unlink($project->photo);
            }
            $path = 'img/uploads';
            $photoName = $path . '/' . rand(1,9999999) .'_'. $photo->getClientOriginalName();
            $photo->move($path, $photoName);
        }else{
            $photoName = $project->photo;
        }

        $project->name = $name;
        $project->text = $text;
        $project->photo = $photoName;
        $project->save();
        \Session::flash('message', 'Project Successfuly Edited');
        return redirect('admin/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if(file_exists($project->photo)) {
            unlink($project->photo);
        }
        $project->delete();
        \Session::flash('message', 'Project Successfuly Deleted');
        return redirect('admin/projects');
    }
}
