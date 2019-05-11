<?php

namespace App\Http\Controllers;

use App\pwvitanagewinners;
use Illuminate\Http\Request;

class pwvitanagewinnerscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vitanawinners=pwvitanagewinners::orderBy('created_at','desc')->paginate(10);
        return view('awards.pw_vitanage_memorial_scholarship.pw_vitanage_memorial_scholarship_winners.index')->with('vitanawinners',$vitanawinners);
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
        $vitanawinners=new pwvitanagewinners();
        $vitanawinners->user_id=auth()->user()->id;
        $vitanawinners->body=$request->input('body');
        $vitanawinners->save();

        return redirect('/pw_vitanage_memorial_winners_create')->with('success','uploaded successfully');
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
        $vitanawinners=pwvitanagewinners::find($id);
        return view('awards.pw_vitanage_memorial_scholarship.pw_vitanage_memorial_scholarship_winners.edit')->with('vitanawinners',$vitanawinners);
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
        $vitanawinners=pwvitanagewinners::find($id);
        $vitanawinners->body=$request->input('body');
        $vitanawinners->save();

        return redirect('/pw_vitanage_memorial_winners')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vitanawinners=pwvitanagewinners::find($id);
        $vitanawinners->delete();
        return redirect('/pw_vitanage_memorial_winners')->with('success','Deleted');
    }
}
