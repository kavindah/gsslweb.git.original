<?php

namespace App\Http\Controllers;

use App\annualtripmore;
use App\fieldexcursionmore;
use Illuminate\Http\Request;

class annualtripmorecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annualtripmore=annualtripmore::orderBy('created_at','desc')->paginate(10);
        return view('activities.annual_trip.annual_trip_more.index')->with('annual_trip_mores',$annualtripmore);
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
            'title'=>'required|max:255|min:5'
        ]);
        $annualtripmore = new annualtripmore();
        $annualtripmore->user_id=auth()->user()->id;
        $annualtripmore->annual_trip_id=$request->input('annual_trip_id');
        $annualtripmore->title=$request->input('title');
        $annualtripmore->body=$request->input('body');
        $annualtripmore->save();

        return redirect('/activities_annual_trip')->with('success','Annual Pleasure Trip created');
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
        $annualtripmore = annualtripmore::find($id);
        return view('activities.annual_trip.annual_trip_more.edit')->with('annual_trip_mores',$annualtripmore);

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
            'title'=>'required|max:255|min:5'
        ]);
        $annualtripmore = annualtripmore::find($id);
        $annualtripmore->user_id=auth()->user()->id;
        $annualtripmore->title=$request->input('title');
        $annualtripmore->body=$request->input('body');
        $annualtripmore->save();

        return redirect('/activities_annual_trip')->with('success','Annual Pleasure Trip Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annualtripmore = annualtripmore::find($id);
        $annualtripmore->delete();
        return redirect('/activities_annual_trip')->with('success','Deleted');
    }
}
