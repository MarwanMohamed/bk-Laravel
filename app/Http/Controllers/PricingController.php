<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Plan;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();
        return view('admin.pricing.show', compact('plans'))->withTitle('pricing') ;
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
            'price' => 'required|integer',
            'text' => 'required',
        ]);

        $plan = new Plan;
        $plan->name =$request->name;
        $plan->price =$request->price;
        $plan->text =$request->text;
        $plan->save();
        \Session::flash('message', 'Plan Added Successfully');
        return redirect('admin/plans');
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
        $plan = Plan::findOrFail($id);
        return view('admin.pricing.edit', compact('plan'))->withTitle('Edit Plan');
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
            'price' => 'required|integer',
            'text' => 'required',
        ]);

        $plan = Plan::findOrFail($id);
        $plan->name =$request->name;
        $plan->price =$request->price;
        $plan->text =$request->text;
        $plan->save();

        \Session::flash('message', 'Plan Successfuly Edited');
        return redirect('admin/plans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plan::findOrFail($id)->delete();
        \Session::flash('message', 'Plan Deleted Successfully');
        return redirect('admin/plans');
    }
}
