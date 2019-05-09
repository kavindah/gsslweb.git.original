<?php

namespace App\Http\Controllers;

use App\presentexcom;
use Illuminate\Http\Request;

class presentexcomcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentexcoms=presentexcom::orderBy('created_at','desc')->paginate(10);
        return view('excom.presentexcom.index')->with('presentexcoms',$presentexcoms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $presentexcom=new presentexcom();
        $presentexcom->user_id=auth()->user()->id;
        $presentexcom->body=$request->input('body');
        $presentexcom->save();

        return redirect('/presentexcom_create')->with('success','uploaded successfully');

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
        $presentexcoms=presentexcom::find($id);
        return view('excom.presentexcom.edit')->with('presentexcoms',$presentexcoms);
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
        $presentexcoms=presentexcom::find($id);
        $presentexcoms->body=$request->input('body');
        $presentexcoms->save();

        return redirect('/presentexcom')->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presentexcoms=presentexcom::find($id);
        $presentexcoms->delete();
        return redirect('/presentexcom')->with('success','Deleted');
    }
}
