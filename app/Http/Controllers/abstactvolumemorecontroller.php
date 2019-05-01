<?php

namespace App\Http\Controllers;

use App\abstactvolumemore;
use Illuminate\Http\Request;

class abstactvolumemorecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abvolumes=abstactvolumemore::orderBy('created_at','desc')->paginate(10);
        return view('publications.abstract_volume.abstract_volume_more.index')->with('abvolumesmores',$abvolumes);
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
        $abvolume = new abstactvolumemore();
        $abvolume->user_id=auth()->user()->id;
        $abvolume->abstract_volume_id=$request->input('abstract_volume_id');
        $abvolume->title=$request->input('title');
        $abvolume->body=$request->input('body');
        $abvolume->save();

        return redirect('/abstract_volume')->with('success','Abstract Volume created');
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
        $abstactvolumemore = abstactvolumemore::find($id);
        return view('publications.abstract_volume.abstract_volume_more.edit')->with('abstactvolumemores',$abstactvolumemore);
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
        $abstactvolumemore=abstactvolumemore::find($id);
        $abstactvolumemore->user_id=auth()->user()->id;
        $abstactvolumemore->title=$request->input('title');
        $abstactvolumemore->body=$request->input('body');
        $abstactvolumemore->save();

        return redirect('/abstract_volume')->with('success','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abstactvolumemore=abstactvolumemore::find($id);
        $abstactvolumemore->delete();
        return redirect('/abstract_volume')->with('success','Deleted');
    }
}
