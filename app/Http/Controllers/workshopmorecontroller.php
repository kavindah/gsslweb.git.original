<?php

namespace App\Http\Controllers;

use App\workshopmore;
use Illuminate\Http\Request;

class workshopmorecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshopmore = workshopmore::orderBy('created_at','desc')->paginate(10);
        return view('activities.workshop_more.index')->with('workshopmores',$workshopmore);
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
        $workshopmore = new workshopmore();
        $workshopmore->user_id=auth()->user()->id;
        $workshopmore->workshop_id=$request->input('workshop_id');
        $workshopmore->title=$request->input('title');
        $workshopmore->body=$request->input('body');
        $workshopmore->save();

        return redirect('/activities')->with('success','New Workshop created');
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
        $workshopmore = workshopmore::find($id);
        return view('activities.workshop_more.edit')->with('workshopmores',$workshopmore);
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
        $workshopmore = workshopmore::find($id);
        $workshopmore->user_id=auth()->user()->id;
        $workshopmore->title=$request->input('title');
        $workshopmore->body=$request->input('body');
        $workshopmore->save();
        return redirect('/activities')->with('success','Workshop Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshopmore = workshopmore::find($id);
        $workshopmore->delete();
        return redirect('/activities')->with('success','Deleted');
    }
}
