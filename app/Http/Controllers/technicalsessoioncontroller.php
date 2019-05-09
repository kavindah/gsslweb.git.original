<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\technicalsession;
use Illuminate\Support\Facades\DB;

class technicalsessoioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technical_session=technicalsession::orderBy('created_at','desc')->paginate(10);
        return view('activities.technical_session.index')->with('technical_sessions',$technical_session);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('activities.technical_session.create');
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
        $technicalsessions=new technicalsession;
        $technicalsessions->user_id=auth()->user()->id;
        $technicalsessions->title=$request->input('title');
        $technicalsessions->save();

    return redirect('/activities_technical_session_create')->with('success','New Technical session title created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('technicalsessionmores')
        ->select('*')
        ->where('technical_session_id', $id)
        ->orderBy('created_at','desc')
        ->get();

        return view('activities.technical_session.technical_session_more.index', ['technicalsessionmores' => $data], compact('id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $technicalsession=technicalsession::find($id);
        return view('activities.technical_session.edit')->with('technicalsessions',$technicalsession);
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
        $technicalsessions=technicalsession::find($id);
        $technicalsessions->title=$request->input('title');
        $technicalsessions->user_id=auth()->user()->id;
        $technicalsessions->save();

    return redirect('/activities_technical_session')->with('success','Technical session title updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $technicalsession=technicalsession::find($id);
        $technicalsession->delete();
        return redirect('/activities_technical_session')->with('success','Technical session title Deleted');
    }
}
