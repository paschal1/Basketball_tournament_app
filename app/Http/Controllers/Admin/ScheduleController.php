<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
     public function create()
    {
        return view('admin.schedule.create');
    }

    public function editschedule($id)
    {
        $schedule = Schedule::find($id);
        return view('admin.schedule.edit', compact('schedule'));
    }

     public function view()
    {
        $schedule = Schedule::all();
        return view('admin.schedule.index', compact('schedule'));
    }

    public function store(Request $request){
        $schedule = new Schedule();
        $schedule->game_id = $request->input('game_id');
        $schedule->date = $request->input('date');
        $schedule->time = $request->input('time');
        $schedule->venue = $request->input('venue');
        $schedule->team1 = $request->input('team1');
        $schedule->team2 = $request->input('team2');
        $schedule->game_status = $request->input('game_status');
        $schedule->results = $request->input('results');
        $schedule->referees = $request->input('referees');
        $schedule->note = $request->input('note');
        $schedule->save();
        return redirect('view')->with('status', 'Schedule Added Successfully');
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::find($id);
        $schedule->game_id = $request->input('game_id');
        $schedule->date = $request->input('date');
        $schedule->time = $request->input('time');
        $schedule->venue = $request->input('venue');
        $schedule->team1 = $request->input('team1');
        $schedule->team2 = $request->input('team2');
        $schedule->game_status = $request->input('game_status');
        $schedule->results = $request->input('results');
        $schedule->referees = $request->input('referees');
        $schedule->note = $request->input('note');
        $schedule->update();
        return redirect('view')->with('status', 'Schedule Updated Successfully');
    }


}
