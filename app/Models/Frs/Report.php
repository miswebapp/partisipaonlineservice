<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'frs_reports';
    protected $primaryKey = 'report_id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['report_id','user_id','team_id','program_id','activity_id','observation','recommendation','report_date','submitted_date','status'];
    
    public function projects()
    {
        return $this->belongsToMany(Project::class,'frs_report_projects','report_id','project_id');
    }
    public function monitoringtools()
    {
        return $this->belongsToMany(MonitoringTool::class,'frs_monitoring_tools','report_id','monitoring_id');
    }
    public function partisipastaffs()
    {
        return $this->belongsToMany(UserDetails::class,'frs_report_partisipa_staffs','report_id','user_id');
    }
    public function cycles()
    {
        return $this->belongsToMany(Cycle::class,'frs_report_cycles','report_id','cycle_id');
    }
    public function phases()
    {
        return $this->belongsToMany(Phase::class,'frs_report_phases','report_id','phase_id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,'frs_report_categories','report_id','category_id');
    }
    public function locations()
    {
        return $this->belongsToMany(Municipal::class,'frs_report_locations','report_id','municipal_id');
    }
    public function photos()
    {
        return $this->hasMany(ReportPhoto::class,'report_id');
    }
    public function counterparts()
    {
        return $this->belongsToMany(Counterpart::class,'frs_report_counterparts','report_id','counterpart_id');
    }
    public function weaknesses()
    {
        return $this->belongsToMany(Weakness::class,'frs_report_weaknesses','report_id','weakness_id');
    }
    public function cycle()
    {
        return $this->belongsToMany(Cycle::class,'frs_report_category_cycle_phases','report_id','cycle_id');
    }
    public function phase()
    {
        return $this->belongsToMany(Phase::class,'frs_report_category_cycle_phases','report_id','phase_id');
    }
}
