<?php

namespace App\Http\Controllers;

use App\technicalsessionmore;
use Illuminate\Http\Request;

class technicalsessionmorecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technicalsessionmore = technicalsessionmore::orderBy('created_at','desc')->paginate(10);
        return view('activities.technical_session.technical_session_more.index')->with('technicalsessionmores',$technicalsessionmore);
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
        $this->validate($request, [
            'title'=>'required|max:255|min:5'
        ]);
        $technicalsessionmore = new technicalsessionmore();
        $technicalsessionmore->user_id=auth()->user()->id;
        $technicalsessionmore->technical_session_id=$request->input('technical_session_id');
        $technicalsessionmore->title=$request->input('title');
        $technicalsessionmore->body=$request->input('body');
        $technicalsessionmore->save();

        return redirect('/activities_technical_session')->with('success','Technical Session created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $technicalsessionmore = technicalsessionmore::find($id);
        return view('activities.technical_session.technical_session_more.edit')->with('technicalsessionmores',$technicalsessionmore);
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
        $technicalsessionmore = technicalsessionmore::find($id);
        $technicalsessionmore->user_id=auth()->user()->id;
        $technicalsessionmore->title=$request->input('title');
        $technicalsessionmore->body=$request->input('body');
        $technicalsessionmore->save();

        return redirect('/activities_technical_session')->with('success','Technical Session Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $technicalsessionmore = technicalsessionmore::find($id);
        $technicalsessionmore->delete();
        return redirect('/activities_technical_session')->with('success','Deleted');
    }
}
