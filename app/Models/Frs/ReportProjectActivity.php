<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ReportProjectActivity extends Model
{
    protected $table = "frs_report_projects_projectactivities";
    protected $fillable = ["report_id","project_id","projectactivity_id"];
}
