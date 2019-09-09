<?php

namespace App\Http\Controllers;

use App\highlights;
use Illuminate\Http\Request;

class HighlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $highlights =highlights::orderBy('created_at','desc')->get();
        return view('/')->with('highlights',$highlights);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('highlights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);
        $highlights = new highlights();
        $highlights->user_id=auth()->user()->id;
        $highlights->body=$request->input('body');
        $highlights->save();

        return redirect('/')->with('success','New Highlight Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\highlights  $highlights
     * @return \Illuminate\Http\Response
     */
    public function show(highlights $highlights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\highlights  $highlights
     * @return \Illuminate\Http\Response
     */
    public function edit($highlights)
    {
        $highlights=highlights::find($highlights);
        return view('highlights.edit')->with('highlights',$highlights);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\highlights  $highlights
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $highlights)
    {
        $this->validate($request,[
            'body'=>'required',
        ]);

        $highlights=highlights::find($highlights);
        $highlights->body=$request->input('body');
        $highlights->user_id=auth()->user()->id;
        $highlights->save();

        return redirect('/')->with('success','highlight Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\highlights  $highlights
     * @return \Illuminate\Http\Response
     */
    public function destroy($highlights)
    {
        $focuses=highlights::find($highlights);
        $focuses->delete();
        return redirect('/')->with('success','Highlight deleted');
    }
}
