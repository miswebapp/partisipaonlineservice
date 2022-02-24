<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ReportCounterpartPositionCapacity extends Model
{
    protected $table = 'frs_report_counterparts';
    protected $fillable = ['report_id','counterpart_id','position_id','capacity_id'];
}
