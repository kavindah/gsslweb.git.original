<?php

namespace App\Http\Controllers;

use App\iesocompastpapers;
use Illuminate\Http\Request;

class iesocompastpaperscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iesocompastpapers=iesocompastpapers::orderBy('created_at','desc')->paginate(10);
        return view('sleso.iesocom.iesocom_pastpapers.index')->with('iesocompastpapers',$iesocompastpapers);

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
        $iesocompastpapers = new iesocompastpapers();
        $iesocompastpapers->user_id=auth()->user()->id;
        $iesocompastpapers->body=$request->input('body');
        $iesocompastpapers->save();

        return redirect('/iesocom_past_papers_create')->with('success','Post created');
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
        $iesocompastpapers=iesocompastpapers::find($id);
        return view('sleso.iesocom.iesocom_pastpapers.edit')->with('iesocompastpapers',$iesocompastpapers);

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
        $iesocompastpapers=iesocompastpapers::find($id);
        $iesocompastpapers->body=$request->input('body');
        $iesocompastpapers->save();

        return redirect('/iesocom_past_papers')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iesocompastpapers=iesocompastpapers::find($id);
        $iesocompastpapers->delete();
        return redirect('/iesocom_past_papers')->with('success','Delete');
    }
}
