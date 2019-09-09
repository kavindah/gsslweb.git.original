<?php

namespace App\Http\Controllers;

use App\editorialboard;
use Illuminate\Http\Request;

class EditorialboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editorialboard=editorialboard::orderBy('created_at','desc')->paginate(10);
        return view('/journal_editorialboard')->with('editors',$editorialboard);
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
            'body'=>'required'
        ]);
        $editorialboard = new editorialboard();
        $editorialboard->body = $request->input('body');
        $editorialboard->user_id = auth()->user()->id;

        $editorialboard->save();

        return redirect('/journal_editorialboard_create')->with('success','created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\editorialboard  $editorialboard
     * @return \Illuminate\Http\Response
     */
    public function show($editorialboard)
    {
        $editorialboard=editorialboard::find($editorialboard);
        return view('journal.editorialboard')->with('editors',$editorialboard);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\editorialboard  $editorialboard
     * @return \Illuminate\Http\Response
     */
    public function edit($editorialboard)
    {
        $editorialboard=editorialboard::find($editorialboard);
        return view('editorialboard.edit')->with('editors',$editorialboard);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\editorialboard  $editorialboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$editorialboard)
    {
        $editorialboard=editorialboard::find($editorialboard);
        $editorialboard->body = $request->input('body');

        $editorialboard->save();

        return redirect('/journal_editorialboard')->with('success','Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\editorialboard  $editorialboard
     * @return \Illuminate\Http\Response
     */
    public function destroy($editorialboard)
    {
        $editorialboard=editorialboard::find($editorialboard);
        $editorialboard->delete();
        return redirect('/journal_editorialboard')->with('success','Deleted');
    }
}
