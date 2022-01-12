<?php

namespace App\Services\Repositories\FRS;

use App\app\Models\Frs\ReportMonitoringToolRating;
use Illuminate\Support\Carbon;
use App\Services\Interfaces\FRS\FrsreportreporsitoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Frs\Program;
use App\Models\Frs\Report;
use App\Models\Frs\ReportLocation;
use App\Models\Frs\ReportMonitoringToolRating as FrsReportMonitoringToolRating;
use App\Models\Frs\ReportPhoto;
use App\Models\Frs\ReportProjectActivity;
use App\Models\Frs\Team;
use App\Models\Frs\Weakness;
use App\UserDetails;
use App\User;


class FrsreportRepository implements FrsreportreporsitoryInterface {


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
        $report->observation = $request->observation;
        $report->recommendation = $request->recommendation;
        $report->report_date = $date;
        $report->submitted_date = $submitted_date;
        $report->status = 1;
        $report->save();

        //Project , project activity , monitoring , rating
        $project_activity = new ReportProjectActivity();
        $project_activity->report_id = $report_id;
        $project_activity->project_id = $request->project_id;
        $project_activity->project_activity_id = $request->project_activity_id;
        $project_activity->save();

        $monitoring_rating = new FrsReportMonitoringToolRating();
        $monitoring_rating->report_id = $report_id;
        $monitoring_rating->monitoring_id = $request->monitoring_tool_id;
        $monitoring_rating->rating_id = $request->monitoring_rating_id;
        $monitoring_rating->save();
        
        //Location
        $location = new ReportLocation();
        $location->report_id = $report_id;
        $location->municipal_id = $request->municipal_id;
        $location->posto_id = $request->posto_id;
        $location->suco_id = $request->suco_id;
        $location->save();

        //Users
        $users = $request->users;

        //Weaknesses
        $weaknesses = $request->wekanesses;

        foreach($weaknesses as $item){
            $report->weaknesses()->attach($item);
        }
        

        //Photo
        $fileName=$report_id.".".$request->file->extension();
        $fileLocation = public_path('uploads');
        $photo = new ReportPhoto();
        $photo->report_id = $report_id;
        $photo->file_name = $fileName;
        $photo->file_location = $fileLocation;
        $request->file->move($fileLocation, $fileName);
        $photo->save();
        
        dd("Saved");

        
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