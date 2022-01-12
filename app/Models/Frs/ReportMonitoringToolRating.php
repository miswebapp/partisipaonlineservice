<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ReportMonitoringToolRating extends Model
{
    protected $table = "frs_report_monitoringtools_ratings";
    protected $fillable = ["report_id","monitoring_id","rating_id"];
}
