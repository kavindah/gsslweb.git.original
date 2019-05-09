<?php

namespace App\Http\Controllers;

use App\slesomembers;
use Illuminate\Http\Request;

class slesomemberscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slesomembers=slesomembers::orderBy('created_at','desc')->paginate(10);
        return view('sleso.sleso_members.index')->with('sleso_members',$slesomembers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sleso_members=new slesomembers();
        $sleso_members->user_id=auth()->user()->id;
        $sleso_members->body=$request->input('body');
        $sleso_members->save();

        return redirect('/sleso_members_create')->with('success','uploaded successfully');
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
        $sleso_members=slesomembers::find($id);
        return view('sleso.sleso_members.edit')->with('sleso_members',$sleso_members);
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
        $sleso_members=slesomembers::find($id);
        $sleso_members->body=$request->input('body');
        $sleso_members->save();

        return redirect('/sleso_members')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sleso_members=slesomembers::find($id);
        $sleso_members->delete();
        return redirect('/sleso_members')->with('success','Deleted');
    }
}
