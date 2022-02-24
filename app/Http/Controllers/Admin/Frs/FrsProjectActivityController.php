<?php

namespace App\Http\Controllers\Admin\Frs;

use App\Http\Controllers\Controller;
use App\Models\Frs\ProjectActivity;
use Illuminate\Http\Request;

class FrsProjectActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $proAct = new ProjectActivity();
        $proAct->name = $request->name;
        $proAct->description = $request->description;
        $proAct->save();

        return redirect()->route('admin.frs.projects.index')->with('status2','New project activity added successfully');
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
        $projAct = ProjectActivity::find($id);
        $projAct->name = $request->name;
        $projAct->description = $request->description;
        $projAct->update();

        return redirect()->route('admin.frs.projects.index')->with('status2','Project details updated successfully');
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
