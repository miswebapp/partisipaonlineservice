<?php

namespace App\app\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ReportMonitoringToolRating extends Model
{
    protected $table = "frs_report_monitoring_tools";
    protected $fillable = ["report_id","monitoring_id","rating_id"];
}
