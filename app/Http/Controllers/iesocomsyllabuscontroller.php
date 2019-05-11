<?php

namespace App\Http\Controllers;

use App\iesocomsyllabus;
use Illuminate\Http\Request;

class iesocomsyllabuscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iesocomsyllabus=iesocomsyllabus::orderBy('created_at','desc')->paginate(10);
        return view('sleso.iesocom.iesocom_syllabus.index')->with('iesocomsyllabuses',$iesocomsyllabus);
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
        $iesocomsyllabus = new iesocomsyllabus();
        $iesocomsyllabus->user_id=auth()->user()->id;
        $iesocomsyllabus->body=$request->input('body');
        $iesocomsyllabus->save();

        return redirect('/iesocom_syllabus_create')->with('success','Post created');
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
        $iesocomsyllabus=iesocomsyllabus::find($id);
        return view('sleso.iesocom.iesocom_syllabus.edit')->with('iesocomsyllabuses',$iesocomsyllabus);
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
        $iesocomsyllabus=iesocomsyllabus::find($id);
        $iesocomsyllabus->body=$request->input('body');
        $iesocomsyllabus->save();

        return redirect('/iesocom_syllabus')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iesocomsyllabus=iesocomsyllabus::find($id);
        $iesocomsyllabus->delete();
        return redirect('/iesocom_syllabus')->with('success','Deleted');

    }
}
