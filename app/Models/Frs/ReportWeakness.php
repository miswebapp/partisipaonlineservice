<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ReportWeakness extends Model
{
    protected $table = "frs_report_weaknesses";
    protected $fillable = ['report_id','weakness_id'];
}
