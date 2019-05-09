<?php

namespace App\Http\Controllers;

use App\pastexcom;
use Illuminate\Http\Request;

class pastexcomcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pastexcoms=pastexcom::orderBy('created_at','desc')->paginate(10);
        return view('excom.pastexcom.index')->with('pastexcoms',$pastexcoms);
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
        $pastexcom=new pastexcom();
        $pastexcom->user_id=auth()->user()->id;
        $pastexcom->body=$request->input('body');
        $pastexcom->save();

        return redirect('/pastexcom_create')->with('success','uploaded successfully');
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
        $pastexcoms=pastexcom::find($id);
        return view('excom.pastexcom.edit')->with('pastexcoms',$pastexcoms);
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
        $pastexcoms=pastexcom::find($id);
        $pastexcoms->body=$request->input('body');
        $pastexcoms->save();

        return redirect('/pastexcom')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pastexcoms=pastexcom::find($id);
        $pastexcoms->delete();
        return redirect('/pastexcom')->with('success','Deleted');
    }
}
