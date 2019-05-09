<?php

namespace App\Http\Controllers;

use App\annualsession;
use Illuminate\Http\Request;

class annualsessioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $annual_session=annualsession::orderBy('created_at','desc')->paginate(10);
        return view('annual_session.index')->with('annual_sessions',$annual_session);
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
        $this->validate($request, [
            'title'=>'required|max:255|min:5'
        ]);
        $annual_session=new annualsession();
        $annual_session->user_id=auth()->user()->id;
        $annual_session->title=$request->input('title');
        $annual_session->body=$request->input('body');
        $annual_session->save();

        return redirect('/annual_session_create')->with('success','New Annual session uploaded');
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
        $annual_session=annualsession::find($id);
        return view('annual_session.edit')->with('annual_sessions',$annual_session);
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
        $annual_session=annualsession::find($id);
        $annual_session->title=$request->input('title');
        $annual_session->body=$request->input('body');
        $annual_session->save();

        return redirect('/annual_session_create')->with('success','New Annual session Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annual_session=annualsession::find($id);
        $annual_session->delete();
        return redirect('/annual_session')->with('success','New Annual session Deleted');
    }
}
