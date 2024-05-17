<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
     public function team_create()
    {
        return view('admin.teams.team_create');
    }
     public function team_edit()
    {
        return view('admin.teams.team_edit');
    }
     public function team_view()
    {
        return view('admin.teams.index');
    }

    public function post_team(Request $request){
        $team = new Team();
        $team->teamname = $request->input('teamname');
        $team->coachname = $request->input('coachname');
        $team->email = $request->input('email');
        $team->password = $request->input('password');
        $team->city = $request->input('city');
        $team->age = $request->input('age');
        $team->phone = $request->input('phone');
        $team->state = $request->input('state');
        $team->zip = $request->input('zip');
        $team->save();
        return redirect('team_view')->with('status', 'Team Added Successfully');
    }
}
