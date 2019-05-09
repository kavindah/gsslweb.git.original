<?php

namespace App\Http\Controllers;

use App\pastpresident;
use Illuminate\Http\Request;

class pastpresidentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pastpresidents=pastpresident::orderBy('created_at','desc')->paginate(10);
        return view('excom.pastpresidents.index')->with('pastpresidents',$pastpresidents);
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
        $pastpresidents=new pastpresident();
        $pastpresidents->user_id=auth()->user()->id;
        $pastpresidents->body=$request->input('body');
        $pastpresidents->save();

        return redirect('/pastpresidents_create')->with('success','uploaded successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pastpresidents=pastpresident::find($id);
        return view('excom.pastpresidents.edit')->with('pastpresidents',$pastpresidents);
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
        $pastpresidents=pastpresident::find($id);
        $pastpresidents->body=$request->input('body');
        $pastpresidents->save();

        return redirect('/pastpresidents')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pastpresidents=pastpresident::find($id);
        $pastpresidents->delete();
        return redirect('/pastpresidents')->with('success','Deleted');

    }
}
