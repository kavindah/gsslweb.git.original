<?php

namespace App\Http\Controllers;

use App\slesocompastpapers;
use Illuminate\Http\Request;

class slesocompastpaperscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slesocompastpapers=slesocompastpapers::orderBy('created_at','desc')->paginate(10);
        return view('sleso.slesocom.slesocom_pastpapers.index')->with('slesocompastpapers',$slesocompastpapers);
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
        $slesocompastpapers = new slesocompastpapers();
        $slesocompastpapers->user_id=auth()->user()->id;
        $slesocompastpapers->body=$request->input('body');
        $slesocompastpapers->save();

        return redirect('/slesocom_past_papers_create')->with('success','Post created');
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
        $slesocompastpapers=slesocompastpapers::find($id);
        return view('sleso.slesocom.slesocom_pastpapers.edit')->with('slesocompastpapers',$slesocompastpapers);
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
        $slesocompastpapers=slesocompastpapers::find($id);
        $slesocompastpapers->body=$request->input('body');
        $slesocompastpapers->save();

        return redirect('/slesocom_past_papers')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slesocompastpapers=slesocompastpapers::find($id);
        $slesocompastpapers->delete();
        return redirect('/slesocom_past_papers')->with('success','Deleted');

    }
}
