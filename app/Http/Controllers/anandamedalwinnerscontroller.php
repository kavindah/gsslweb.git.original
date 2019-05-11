<?php

namespace App\Http\Controllers;

use App\anandamedalwinners;
use Illuminate\Http\Request;

class anandamedalwinnerscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anandawinners=anandamedalwinners::orderBy('created_at','desc')->paginate(10);
        return view('awards.ananda_coomaraswamy_medal.ananda_coomaraswamy_medal_winners.index')->with('anandawinners',$anandawinners);
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
        $anandawinners=new anandamedalwinners();
        $anandawinners->user_id=auth()->user()->id;
        $anandawinners->body=$request->input('body');
        $anandawinners->save();

        return redirect('/ananda_coomaraswamy_medal_winners_create')->with('success','uploaded successfully');
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
        $anandawinners=anandamedalwinners::find($id);
        return view('awards.ananda_coomaraswamy_medal.ananda_coomaraswamy_medal_winners.edit')->with('anandawinners',$anandawinners);
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
        $anandawinners=anandamedalwinners::find($id);
        $anandawinners->body=$request->input('body');
        $anandawinners->save();

        return redirect('/ananda_coomaraswamy_medal_winners')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anandawinners=anandamedalwinners::find($id);
        $anandawinners->delete();
        return redirect('/ananda_coomaraswamy_medal_winners')->with('success','Deleted');
    }
}
