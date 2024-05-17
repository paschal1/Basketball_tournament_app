<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{

     public function player_create()
    {
         $team = Team::all();
        return view('admin.players.players_create', compact('team'));
    }
     public function player_edit()
    {
        $team = Team::all();
        return view('admin.players.players_edit', compact('team'));
    }
     public function player_view()
    {
        return view('admin.players.index');
    }

    public function post_player(Request $request){
        $player = new Player();
        $player->team_id = $request->input('team_id');
        $player->fname = $request->input('fname');
        $player->lname = $request->input('lname');
        $player->dname = $request->input('dname');
        $player->email = $request->input('email');
        $player->password = $request->input('password');
        $player->city = $request->input('city');
        $player->age = $request->input('age');
        $player->phone = $request->input('phone');
        $player->state = $request->input('state');
        $player->zip = $request->input('zip');
        $player->level = $request->input('level');
        $player->save();
        return redirect('player_view')->with('status', 'Team Added Successfully');
    }
}
