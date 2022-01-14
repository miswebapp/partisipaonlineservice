<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ReportCategoryCyclePhase extends Model
{
    protected $table = "frs_report_category_cycle_phase";
    protected $fillable = ['report_id','category_id','cycle_id','phase_id'];
}
