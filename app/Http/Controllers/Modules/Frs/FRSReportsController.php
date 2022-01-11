<?php

namespace App\Http\Controllers\Modules\Frs;

use App\Services\Interfaces\Frs\FrsreportreporsitoryInterface as FrsReportRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\SystemModule;
use App\SystemModule;
use App\Models\Frs\Municipal;
use App\Models\Frs\Program;
use App\Models\Frs\Activity;
use App\Models\Frs\Project;
use App\Models\Frs\ProjectActivity;
use App\Models\Frs\MonitoringTool;
use App\Models\Frs\MonitoringRating;
use App\Models\Frs\Weakness;



class FRSReportsController extends Controller
{
  
    protected $report;

    public function __construct(FrsReportRepositoryInterface $report)
    {
        $this->report = $report;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipals = Municipal::all();
        $programs = Program::all();
        $activities = Activity::all();
        $projects = Project::all();
        $projectActivities = ProjectActivity::all();
        $monitorings = MonitoringTool::all();
        $ratings = MonitoringRating::all();
        $moduleusers = SystemModule::with('member')->where('id',1)->get();
        $weaknesses = Weakness::with('category')->get();
        $maintitle = "Submit field report";
        return view('modules.frs.index',compact('municipals','programs','activities','projects','projectActivities','monitorings','ratings','moduleusers','weaknesses'))->with('maintitle',$maintitle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //setup report id

        $this->report->saveNewReport($request);

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
        //
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
