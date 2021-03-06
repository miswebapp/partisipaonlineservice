<?php

namespace App\Http\Controllers\Admin\Frs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frs\MonitoringTool;

class FrsMonitoringToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitoringtools = MonitoringTool::all();
        $maintitle="Monitoring Tools Management";
        return view('admin.frs.monitoringtools',compact('monitoringtools'))->with('maintitle',$maintitle);
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
        $monitoringtool = new MonitoringTool();
        $monitoringtool->name = $request->name;
        $monitoringtool->description = $request->description;
        $monitoringtool->save();

        return redirect()->route('admin.frs.monitoringtools.index')->with('status','Monitoring tool added successfully');
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
        $monitoringtool = MonitoringTool::find($id);
        $monitoringtool->name = $request->name;
        $monitoringtool->description = $request->description;
        $monitoringtool->update();

        return redirect()->route('admin.frs.monitoringtools.index')->with('status','Monitoring tool updated successfully');
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
