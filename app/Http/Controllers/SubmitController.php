<?php

namespace App\Http\Controllers;

use App\Models\Submit;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Submit::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Submit::create([
            'submitter'=> $request->submitter,
            'game'=> $request->game
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submit  $submit
     * @return \Illuminate\Http\Response
     */
    public function show(Submit $submit)
    {
        return $submit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Submit  $submit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submit $submit)
    {
        return $submit->update([
            'submitter'=> $request->submitter,
            'game'=> $request->game
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submit  $submit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submit $submit)
    {
        return $submit->delete();
    }
}
