<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LiveScore;
use Illuminate\Http\Request;

class LiveScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.livescore.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.livescore.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livescore = new LiveScore();

        $livescore->tournament_id = $request->input('tournament_id');
        $livescore->team1_id = $request->input('team1_id');
        $livescore->team2_id = $request->input('team2_id');
        $livescore->team1_score = $request->input('team1_score');
        $livescore->team2_score = $request->input('team2_score');
        $livescore->period = $request->input('period');
        $livescore->venue = $request->input('venue');
        $livescore->status = $request->input('status');
        $livescore->save();

        return redirect()->route(route: 'livescores.index')->with('status', 'livescore Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LiveScore  $liveScore
     * @return \Illuminate\Http\Response
     */
    public function show(LiveScore $liveScore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LiveScore  $liveScore
     * @return \Illuminate\Http\Response
     */
    public function edit(LiveScore $liveScore)
    {
        return view('admin.livescore.edit', compact('liveScore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LiveScore  $liveScore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LiveScore $liveScore)
    {
        $liveScore->tournament_id = $request->input('tournament_id');
        $liveScore->team1_id = $request->input('team1_id');
        $liveScore->team2_id = $request->input('team2_id');
        $liveScore->team1_score = $request->input('team1_score');
        $liveScore->team2_score = $request->input('team2_score');
        $liveScore->period = $request->input('period');
        $liveScore->venue = $request->input('venue');
        $liveScore->status = $request->input('status');
        $liveScore->update();

        return redirect()->route(route: 'livescores.index')->with('status', 'livescore Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LiveScore  $liveScore
     * @return \Illuminate\Http\Response
     */
    public function destroy(LiveScore $liveScore)
    {
        $liveScore->delete();
        return redirect()->back()->withh('status', 'Live Score Deleted Successfully');
    }
}
