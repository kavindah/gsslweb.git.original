<?php

namespace App\Http\Controllers;

use App\generalpublic;
use Illuminate\Http\Request;

class generalpubliccontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generalpublics=generalpublic::orderBy('created_at','desc')->paginate(10);
        return view('generalpublic.index')->with('generalpublics',$generalpublics);
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
        $generalpublics = new generalpublic();
        $generalpublics->user_id=auth()->user()->id;
        $generalpublics->title=$request->input('title');
        $generalpublics->body=$request->input('body');
        $generalpublics->save();

        return redirect('/general_public_create')->with('success','general public created');
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
        $generalpublics=generalpublic::find($id);
        return view('generalpublic.edit')->with('generalpublics',$generalpublics);
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
        $generalpublics=generalpublic::find($id);
        $generalpublics->user_id=auth()->user()->id;
        $generalpublics->title=$request->input('title');
        $generalpublics->body=$request->input('body');
        $generalpublics->save();

        return redirect('/general_public')->with('success','General Public Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generalpublics=generalpublic::find($id);
        $generalpublics->delete();
        return redirect('/general_public')->with('success','General Public Deleted');
    }
}
