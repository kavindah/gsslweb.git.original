<?php

namespace App\Http\Controllers;

use App\undergraduateresearchawardwinners;
use Illuminate\Http\Request;

class undergraduateresearchawardwinnerscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $undergraduateresearchawardwinners=undergraduateresearchawardwinners::orderBy('created_at','desc')->paginate(10);
        return view('awards.undergraduate_research_awards.undergraduate_research_awards_winners.index')->with('undergraduateresearchawardswinner',$undergraduateresearchawardwinners);

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
        $undergraduateresearchawardwinners = new undergraduateresearchawardwinners;
        $undergraduateresearchawardwinners->user_id=auth()->user()->id;
        $undergraduateresearchawardwinners->body=$request->input('body');
        $undergraduateresearchawardwinners->save();

        return redirect('/research_awards_winners_create')->with('success','New Record created');

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
        $undergraduateresearchawardwinners=undergraduateresearchawardwinners::find($id);
        return view('awards.undergraduate_research_awards.undergraduate_research_awards_winners.edit')->with('undergraduateresearchawardswinner',$undergraduateresearchawardwinners);

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
        $undergraduateresearchawardwinners=undergraduateresearchawardwinners::find($id);
        $undergraduateresearchawardwinners->body=$request->input('body');
        $undergraduateresearchawardwinners->save();

        return redirect('/research_awards_winners')->with('success','Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $undergraduateresearchawardwinners=undergraduateresearchawardwinners::find($id);
        $undergraduateresearchawardwinners->delete();
        return redirect('/research_awards_winners')->with('success','Updated Successfully');

    }
}
