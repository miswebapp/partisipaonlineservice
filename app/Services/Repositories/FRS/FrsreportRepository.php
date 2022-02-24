<?php

namespace App\Services\Repositories\FRS;

use App\app\Models\Frs\ReportMonitoringToolRating;
use App\app\Models\Frs\ReportPartisipaStaff;
use App\Models\Frs\Counterpart;
use App\Models\Frs\Position;
use Illuminate\Support\Carbon;
use App\Services\Interfaces\FRS\FrsreportreporsitoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Frs\Program;
use App\Models\Frs\Report;
use App\Models\Frs\ReportCategory;
use App\Models\Frs\ReportCounterpartPositionCapacity;
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
        // dd($request);
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
        if(!empty($request->project_id)){
            $project_activity = new ReportProjectActivity();
            $project_activity->report_id = $report_id;
            $project_activity->project_id = $request->project_id;
            $project_activity->project_activity_id = $request->project_activity_id;
            $project_activity->save();
        }
        

        if(!empty($request->monitoring_id)){
            $monitoring_rating = new FrsReportMonitoringToolRating();
            $monitoring_rating->report_id = $report_id;
            $monitoring_rating->monitoring_id = $request->monitoring_tool_id;
            $monitoring_rating->rating_id = $request->monitoring_rating_id;
            $monitoring_rating->save();
        }
        //Location
        
        $location = new ReportLocation();
        $location->report_id = $report_id;
        $location->municipal_id = $request->municipal_id;
        $location->posto_id = $request->posto_id;
        $location->suco_id = $request->suco_id;
        $location->save();

        //Category
        if(!empty($request->categories)){
            foreach($request->categories as $category_id){
                if(!$category_id == 0){
                    $report->categories()->attach($category_id);
                }
            }
        }
        //Cycle
        if(!empty($request->cycles)){
            foreach($request->cycles as $cycle_id){
                if(!$cycle_id == 0){
                    $report->cycles()->attach($cycle_id);
                }
            }
        }
        
        //Phase
        if(!empty($request->phases)){
            foreach($request->phases as $phase_id){
                if(!$phase_id == 0){
                    $report->phases()->attach($phase_id);
                }
            }
        }
        
        //Partisipa Staff
        if(!empty($request->partisipa)){
            $staffs = $request->partisipa;
            foreach($staffs as $staff){
                $report->partisipastaffs()->attach($staff);
            }
        }
        
        //Counterpart Staff
        if(!empty($request->counterparts)){
            $counterparts = $request->counterparts;
            foreach($counterparts as $counterpart){
                $staff = Counterpart::find($counterpart);
                $report_Counterpart = new ReportCounterpartPositionCapacity();
                $report_Counterpart->report_id = $report_id;
                $report_Counterpart->counterpart_id = $counterpart;
                $report_Counterpart->position_id = $staff->position_id;
                $report_Counterpart->capacity_id = $request[$counterpart."_capacity"];
                $report_Counterpart->save();
            
            }
        }
        
        //Weaknesses
        $weaknesses = $request->wekanesses;
        foreach($weaknesses as $item){
            $report->weaknesses()->attach($item);
        }
        
        //Photo
        if($request->hasFile('file')){
            $fileName=$report_id.".".$request->file->extension();
            $fileLocation = public_path('uploads');
            $photo = new ReportPhoto();
            $photo->report_id = $report_id;
            $photo->file_name = $fileName;
            $photo->file_location = $fileLocation;
            $request->file->move($fileLocation, $fileName);
            $photo->save();
        }
       
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