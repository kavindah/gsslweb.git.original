<?php

namespace App\Http\Controllers;

use App\fieldexcursionmore;
use Illuminate\Http\Request;

class fieldexcursionmorecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fieldexcursionmore=fieldexcursionmore::orderBy('created_at','desc')->paginate(10);
        return view('activities.field_excursion.field_excursion_more.index')->with('fieldexcursionmores',$fieldexcursionmore);
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
        $fieldexcursionmore = new fieldexcursionmore();
        $fieldexcursionmore->user_id=auth()->user()->id;
        $fieldexcursionmore->field_excursion_id=$request->input('field_excursion_id');
        $fieldexcursionmore->title=$request->input('title');
        $fieldexcursionmore->body=$request->input('body');
        $fieldexcursionmore->save();

        return redirect('/activities_field_excursion')->with('success','Field Excursion created');
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
        $fieldexcursionmore = fieldexcursionmore::find($id);
        return view('activities.field_excursion.field_excursion_more.edit')->with('fieldexcursionmores',$fieldexcursionmore);
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
        $fieldexcursionmore = fieldexcursionmore::find($id);
        $fieldexcursionmore->user_id=auth()->user()->id;
        $fieldexcursionmore->title=$request->input('title');
        $fieldexcursionmore->body=$request->input('body');
        $fieldexcursionmore->save();

        return redirect('/activities_field_excursion')->with('success','Field Excursion Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fieldexcursionmore = fieldexcursionmore::find($id);
        $fieldexcursionmore->delete();
        return redirect('/activities_field_excursion')->with('success','Deleted');
    }
}
