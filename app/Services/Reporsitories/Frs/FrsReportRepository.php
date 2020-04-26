<?php

namespace App\Services\Repositories\Frs;

use Illuminate\Support\Carbon;
use App\Services\Interfaces\Frs\FrsReportRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Frs\Program;
use App\Models\Frs\Report;
use App\Models\Frs\Team;
use App\UserDetails;
use App\User;


class FrsReportRepository implements FrsReportRepositoryInterface {


    public function saveNewReport($request)
    {
        $report = new Report();
        
        $date = str_replace("-","", $request->report_date);
        $submitted_date = date('Y-m-d H:i:s');
        $report_id = $this->generateReportId($date, $request->program_id);
        $team_id = $this->getFrsTeamId();
        $user_id = $this->getUser()->id;

        //Main Report
        $report->report_id = $report_id;
        $report->user_id = $user_id;
        $report->team_id = $team_id;
        $report->program_id = $request->program_id;
        $report->activity_id = $request->activity_id;
        $report->comment = $request->observation;
        $report->recommendation = $request->recommendation;
        $report->report_date = $date;
        $report->submitted_date = $submitted_date;
        $report->status = "P";

        //Project , project activity , monitoring , rating
        $project_id = $request->project_id;
        $project_activity_id = $request->project_activity_id;
        $monitoring_tool_id = $request->monitoring_tool_id;
        $monitoring_rating_id = $request->monitoring_rating_id;

        //Location
        $municipal_id = $request->municipal_id;
        $posto_id = $request->posto_id;
        $suco_id = $request->suco_id;

        //Users
        $users = $request->users;
        
        //Weaknesses
        $wekanesses = $request->wekanesses;

        //Photo
        $photo = $request->photo;

        
    }
    public function getAllReports()
    {
        //
    }

    private function getFrsTeamId()
    {
        // $account = User::with('details')->find(Auth::id());
        // $user = UserDetails::with('frsteam')->find($account->user_id);
        return $this->getUser()->frsteam->first()->id;
    }

    private function generateReportId($date,$program_id)
    {
        $program = Program::find($program_id)->first();
        $program_alias = $program->alias;
        return $date.$program_alias.Str::random(5);
    }

    private function getUser()
    {
        $account = User::with('details')->find(Auth::id());
        $user = UserDetails::with('frsteam')->find($account->user_id);
        return $user;
    }
    
}
?>