<?php

namespace App\Http\Controllers;

use App\slesocomsyllabus;
use Illuminate\Http\Request;

class slesocomsyllabuscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slesocomsyllabus=slesocomsyllabus::orderBy('created_at','desc')->paginate(10);
        return view('sleso.slesocom.slesocom_syllabus.index')->with('slesocomsyllabuses',$slesocomsyllabus);

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
        $slesocomsyllabus = new slesocomsyllabus();
        $slesocomsyllabus->user_id=auth()->user()->id;
        $slesocomsyllabus->body=$request->input('body');
        $slesocomsyllabus->save();

        return redirect('/slesocom_syllabus_create')->with('success','Post created');
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
        $slesocomsyllabus=slesocomsyllabus::find($id);
        return view('sleso.slesocom.slesocom_syllabus.edit')->with('slesocomsyllabuses',$slesocomsyllabus);

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
        $slesocomsyllabus=slesocomsyllabus::find($id);
        $slesocomsyllabus->body=$request->input('body');
        $slesocomsyllabus->save();

        return redirect('/slesocom_syllabus')->with('success','Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slesocomsyllabus=slesocomsyllabus::find($id);
        $slesocomsyllabus->delete();
        return redirect('/slesocom_syllabus')->with('success','Deleted');
    }
}
