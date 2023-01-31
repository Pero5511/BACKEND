<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Game::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Game::create([
            'name'=> $request->name,
            'organiser'=> $request->organiser,
            'prize'=> $request->prize,
            'prize_value'=> $request->prize_value,
            'finishes_at'=> $request->finishes_at,
            'tokens'=>$request->tokens,
            'type'=>$request->type
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return $game;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        return $game->update([
            'name'=> $request->name,
            'organiser'=> $request->organiser,
            'prize'=> $request->prize,
            'prize_value'=> $request->prize_value,
            'finishes_at'=> $request->finishes_at,
            'winner'=>$request->winner,
            'tokens'=>$request->tokens,
            'type'=>$request->type
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        return $game->delete();
    }
}
