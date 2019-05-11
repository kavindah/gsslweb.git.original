<?php

namespace App\Http\Controllers;

use App\pgwinners;
use Illuminate\Http\Request;

class pgwinnerscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pgwinners=pgwinners::orderBy('created_at','desc')->paginate(10);
        return view('awards.pg_cooray_medal.pg_cooray_medal_winners.index')->with('pgwinners',$pgwinners);
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
        $pgwinners=new pgwinners();
        $pgwinners->user_id=auth()->user()->id;
        $pgwinners->body=$request->input('body');
        $pgwinners->save();

        return redirect('/pg_cooray_medal_winners_create')->with('success','uploaded successfully');
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
        $pgwinners=pgwinners::find($id);
        return view('awards.pg_cooray_medal.pg_cooray_medal_winners.edit')->with('pgwinners',$pgwinners);

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
        $pgwinners=pgwinners::find($id);
        $pgwinners->body=$request->input('body');
        $pgwinners->save();

        return redirect('/pg_cooray_medal_winners')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pgwinners=pgwinners::find($id);
        $pgwinners->delete();
        return redirect('/pg_cooray_medal_winners')->with('success','Deleted');
    }
}
