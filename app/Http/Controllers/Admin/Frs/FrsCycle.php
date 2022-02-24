<?php

namespace App\Http\Controllers\Admin\Frs;

use App\Http\Controllers\Controller;
use App\Models\Frs\Cycle;
use Illuminate\Http\Request;

class FrsCycle extends Controller
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
        $cycle = new Cycle();
        $cycle->name = $request->name;
        $cycle->description = $request->description;
        $cycle->save();

        return redirect()->route('admin.frs.category.cycle.phase.index')->with('status2','New category added successfully');
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
        $cycle = Cycle::find($id);
        $cycle->name = $request->name;
        $cycle->description = $request->description;
        $cycle->update();

        return redirect()->route('admin.frs.category.cycle.phase.index')->with('status2','Cycle details updated successfully');
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
