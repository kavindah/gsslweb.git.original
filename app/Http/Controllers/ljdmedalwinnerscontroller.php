<?php

namespace App\Http\Controllers;

use App\ljdmedalwinners;
use Illuminate\Http\Request;

class ljdmedalwinnerscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ljd_medal_winners=ljdmedalwinners::orderBy('created_at','desc')->paginate(10);
        return view('awards.ljd_medal.ljd_medal_winners.index')->with('ljd_medal_winners',$ljd_medal_winners);

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
        $ljd_medal_winners=new ljdmedalwinners();
        $ljd_medal_winners->user_id=auth()->user()->id;
        $ljd_medal_winners->body=$request->input('body');
        $ljd_medal_winners->save();

        return redirect('/ljd_medal_winners_create')->with('success','uploaded successfully');
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
        $ljd_medal_winners=ljdmedalwinners::find($id);
        return view('awards.ljd_medal.ljd_medal_winners.edit')->with('ljd_medal_winners',$ljd_medal_winners);

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
        $ljd_medal_winners=ljdmedalwinners::find($id);
        $ljd_medal_winners->body=$request->input('body');
        $ljd_medal_winners->save();

        return redirect('/ljd_medal_winners')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ljd_medal_winners=ljdmedalwinners::find($id);
        $ljd_medal_winners->delete();
        return redirect('/ljd_medal_winners')->with('success','Deleted');
    }
}
