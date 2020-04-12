<?php

namespace App\Http\Controllers\Admin\Frs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frs\Activity;
use App\Models\Frs\ActivityCategory;
use App\Models\Frs\ActivityLocation;
class FrsActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ActivityCategory::all();
        $levels = ActivityLocation::all();
        $activities = Activity::with('category','location')->get();
        $maintitle="Activities Management";
        return view('admin.frs.activities', compact('activities','levels','categories'))->with('maintitle',$maintitle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activity = new Activity();
        $activity->name = $request->name;
        $activity->category_id = $request->category_id;
        $activity->location_id = $request->location_id;
        $activity->require_capacity = $request->require_capacity;
        $activity->require_monitoring = $request->require_monitoring;
        $activity->require_cycle = $request->require_cycle;
        $activity->require_phase = $request->require_phase;

        $activity->save();

        return redirect()->route('admin.frs.activities.index')->with('status','New activity added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $activity = Activity::find($id);
        $activity->name = $request->name;
        $activity->category_id = $request->category_id;
        $activity->location_id = $request->location_id;
        $activity->require_capacity = $request->require_capacity;
        $activity->require_monitoring = $request->require_monitoring;
        $activity->require_cycle = $request->require_cycle;
        $activity->require_phase = $request->require_phase;

        $activity->save();
        return redirect()->route('admin.frs.activities.index')->with('status','Activity details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
