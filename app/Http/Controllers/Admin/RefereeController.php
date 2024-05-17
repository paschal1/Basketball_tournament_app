<?php

namespace App\Http\Controllers\Admin;

use App\Models\Referee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class RefereeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referee = Referee::all();
        // if(session(key:'success_message')){
        //     Alert::success('Success Title', 'Success');
        // }
        return view('admin.referee.index', compact('referee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.referee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //post to database
        $referee = new Referee();
        $referee->referee_name = $request->input('referee_name');
        $referee->email = $request->input('email');
        $referee->phone = $request->input('phone');
        $referee->address = $request->input('address');
        $referee->save();

        // return Redirect::to('referees')->with('status', 'Referee Added Successfully');
         return redirect()->route( route:'referees.index')->with('status', 'Referee Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function show(Referee $referee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function edit(Referee $refereeid)
    {
        //show update page
        $referee = Referee::find($refereeid);
        return view('admin.referee.edit', compact('referee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referee $refereeid)
    {
        //update
        $referee =  Referee::find($refereeid);
        $referee->referee_name = $request->input('referee_name ');
        $referee->email = $request->input('email');
        $referee->phone = $request->input('phone');
        $referee->address = $request->input('address');
        $referee->update();

        return redirect()->route( route:'referees.index')->with('status', 'Referee Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referee $referee)
    {
        //delete
        $referee->delete();
    }
}
