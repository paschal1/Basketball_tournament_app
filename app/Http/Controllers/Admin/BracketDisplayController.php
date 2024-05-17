<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BracketDisplay;
use Illuminate\Http\Request;

class BracketDisplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.bracket_display.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.bracket_display.create");//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store bracket display
        $bracket = new BracketDisplay();

        $bracket->tournament_id = $request->input('tournament_id');
        $bracket->round_id = $request->input('round_id');
        $bracket->winner_id = $request->input('winner_id');
        $bracket->team1_id = $request->input('team1_id');
        $bracket->team2_id = $request->input('team2_id');
        $bracket->team1_score = $request->input('team1_score');
        $bracket->team2_score = $request->input('team2_score');
        $bracket->save();

        return redirect()->route(route: 'brackets.index')->with('status', 'Bracket Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BracketDisplay  $bracketDisplay
     * @return \Illuminate\Http\Response
     */
    public function show(BracketDisplay $bracketDisplay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BracketDisplay  $bracketDisplay
     * @return \Illuminate\Http\Response
     */
    public function edit(BracketDisplay $bracketDisplay)
    {
        //
        return view('admin.brackets.edit', compact('bracketDisplay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BracketDisplay  $bracketDisplay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BracketDisplay $bracketDisplay)
    {
        //update braket display
        $bracketDisplay->tournament_id = $request->input('tournament_id');
        $bracketDisplay->round_id = $request->input('round_id');
        $bracketDisplay->winner_id = $request->input('winner_id');
        $bracketDisplay->team1_id = $request->input('team1_id');
        $bracketDisplay->team2_id = $request->input('team2_id');
        $bracketDisplay->team1_score = $request->input('team1_score');
        $bracketDisplay->team2_score = $request->input('team2_score');
        $bracketDisplay->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BracketDisplay  $bracketDisplay
     * @return \Illuminate\Http\Response
     */
    public function destroy(BracketDisplay $bracketDisplay)
    {
        //delete
        $bracketDisplay->delete();
        return redirect()->back()->withh('status', 'Bracket Display Deleted Successfully');
    }
}
