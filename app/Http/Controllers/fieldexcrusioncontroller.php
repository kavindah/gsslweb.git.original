<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fieldexcrusion;
use Illuminate\Support\Facades\DB;

class fieldexcrusioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $field_excursion=fieldexcrusion::orderBy('created_at','desc')->paginate(10);
        return view('activities.field_excursion.index')->with('field_excursions',$field_excursion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activities.field_excursion.create');
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
        $fieldexcursions=new fieldexcrusion;
        $fieldexcursions->title=$request->input('title');
        $fieldexcursions->user_id=auth()->user()->id;
    
    $fieldexcursions->save();

    return redirect('/activities_field_excursion_create')->with('success','New field Excursions uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('fieldexcursionmores')
            ->select('*')
            ->where('field_excursion_id', $id)
            ->orderBy('created_at','desc')
            ->get();

        return view('activities.field_excursion.field_excursion_more.index', ['fieldexcursionmores' => $data], compact('id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fieldexcursions=fieldexcrusion::find($id);
        return view('activities.field_excursion.edit')->with('fieldexcursions',$fieldexcursions);
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
        $fieldexcursions=fieldexcrusion::find($id);
        $fieldexcursions->title=$request->input('title');
        $fieldexcursions->user_id=auth()->user()->id;

        $fieldexcursions->save();

     return redirect('/activities_field_excursion')->with('success','New field Excursions updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fieldexcursions=fieldexcrusion::find($id);
        $fieldexcursions->delete();
         return redirect('/activities_field_excursion')->with('success','New field Excursions Deleted');

    }
}
