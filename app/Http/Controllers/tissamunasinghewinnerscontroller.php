<?php

namespace App\Http\Controllers;

use App\tissamunasinghewinners;
use Illuminate\Http\Request;

class tissamunasinghewinnerscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tissawinners=tissamunasinghewinners::orderBy('created_at','desc')->paginate(10);
        return view('awards.tissa_munasinghe.tissa_munasinghe_winners.index')->with('tissawinners',$tissawinners);

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
        $tissawinners=new tissamunasinghewinners();
        $tissawinners->user_id=auth()->user()->id;
        $tissawinners->body=$request->input('body');
        $tissawinners->save();

        return redirect('/tissa_munasinghe_sch_winners_create')->with('success','uploaded successfully');
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
        $tissawinners=tissamunasinghewinners::find($id);
        return view('awards.tissa_munasinghe.tissa_munasinghe_winners.edit')->with('tissawinners',$tissawinners);

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
        $tissawinners=tissamunasinghewinners::find($id);
        $tissawinners->body=$request->input('body');
        $tissawinners->save();

        return redirect('/tissa_munasinghe_sch_winners')->with('success','uploaded successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tissawinners=tissamunasinghewinners::find($id);
        $tissawinners->delete();
        return redirect('/tissa_munasinghe_sch_winners')->with('success','Deleted');
    }
}
