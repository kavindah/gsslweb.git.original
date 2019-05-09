<?php

namespace App\Http\Controllers;

use App\slesopastmembers;
use Illuminate\Http\Request;

class slesopastmemberscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slesopastmembers=slesopastmembers::orderBy('created_at','desc')->paginate(10);
        return view('sleso.sleso_past_members.index')->with('sleso_past_members',$slesopastmembers);
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
        $sleso_past_members=new slesopastmembers();
        $sleso_past_members->user_id=auth()->user()->id;
        $sleso_past_members->body=$request->input('body');
        $sleso_past_members->save();

        return redirect('/sleso_past_members_create')->with('success','uploaded successfully');

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
        $sleso_past_members=slesopastmembers::find($id);
        return view('sleso.sleso_past_members.edit')->with('sleso_past_members',$sleso_past_members);

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
        $sleso_past_members=slesopastmembers::find($id);
        $sleso_past_members->body=$request->input('body');
        $sleso_past_members->save();

        return redirect('/sleso_past_members')->with('success','Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sleso_past_members=slesopastmembers::find($id);
        $sleso_past_members->delete();
        return redirect('/sleso_past_members')->with('success','Deleted');
    }
}
