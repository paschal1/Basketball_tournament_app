<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Standing;
use Illuminate\Http\Request;

class StandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('admin.standings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.standings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $standing = new Standing();
        $standing->standing_name = $request->input('standing_name');
        $standing->email = $request->input('email');
        $standing->phone = $request->input('phone');
        $standing->address = $request->input('address');
        $standing->save();

        // return Redirect::to('stadings')->with('status', 'stading Added Successfully');
        return redirect()->route(route: 'stadings.index')->with('status', 'stading Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function show(Standing $standing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function edit(Standing $standing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Standing $standing)
    {
        //update
        $standing->standing_name = $request->input('standing_name');
        $standing->email = $request->input('email');
        $standing->phone = $request->input('phone');
        $standing->address = $request->input('address');
        $standing->update();

        // return Redirect::to('stadings')->with('status', 'stading Added Successfully');
        return redirect()->route(route: 'stadings.index')->with('status', 'stading Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Standing $standing)
    {
        //
    }
}
