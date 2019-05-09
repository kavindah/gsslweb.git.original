<?php

namespace App\Http\Controllers;

use App\newslettersmore;
use Illuminate\Http\Request;

class newslettersmorecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newslettersmore=newslettersmore::orderBy('created_at','desc')->paginate(10);
        return view('publications.news_letters.news_letters_more.index')->with('newslettersmores',$newslettersmore);
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
        $newslettersmore = new newslettersmore();
        $newslettersmore->user_id=auth()->user()->id;
        $newslettersmore->news_letters_id=$request->input('news_letters_id');
        $newslettersmore->title=$request->input('title');
        $newslettersmore->body=$request->input('body');
        $newslettersmore->save();

        return redirect('/news_letters')->with('success','News Letter created');
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
        $newslettersmore = newslettersmore::find($id);
        return view('publications.news_letters.news_letters_more.edit')->with('newslettersmores',$newslettersmore);
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
        $newslettersmore = newslettersmore::find($id);
        $newslettersmore->user_id=auth()->user()->id;
        $newslettersmore->title=$request->input('title');
        $newslettersmore->body=$request->input('body');
        $newslettersmore->save();

        return redirect('/news_letters')->with('success','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newslettersmore = newslettersmore::find($id);
        $newslettersmore->delete();
        return redirect('/news_letters')->with('success','Deleted');
    }
}
