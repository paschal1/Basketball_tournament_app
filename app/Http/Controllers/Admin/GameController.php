<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::paginate(16);
        return view('admin.game.index', compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Tournament::all();
        return view('admin.game.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = new Game();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientoriginalExtension();
            $file->move('assets/uploads/games', $filename);

            $game->file = $filename;
        }

        $game->tournament_id = $request->input('tournament_id');
        $game->game_name = $request->input('game_name');
        $game->date = $request->input('date');
        $game->time = $request->input('time');
        $game->game_status = $request->input('game_status');
        $game->notes = $request->input('notes');
        $game->save();

        return redirect()->route( route:'games.index')->with('status', 'Game Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        // return $game;
        return view('admin.game.edit', compact('game'));
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
        // $game = Game::find($gameid);
        if ($request->hasFile('file')) {
            $path = 'assets/uploads/games' . $game->file;

            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientoriginalExtension();
            $file->move('assets/uploads/games', $filename);
            $game->file = $filename;
        }

        $game->tournament_id = $request->input('tournament_id');
        $game->game_name = $request->input('game_name');
        $game->date = $request->input('date');
        $game->time = $request->input('time');
        $game->game_status = $request->input('game_status');
        $game->notes = $request->input('notes');
        $game->update();

        return redirect()->route( route:'games.index')->with('status', 'Game Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {

        // $game = Game::find($gameid);
        $path = 'assets/uploads/games' .$game->file;
        if (File::exists($path)) {
            File::delete($path);
        }

        $game->delete();
        return redirect()->back()->withh('status', 'Game Deleted Successfully');
    }
}
