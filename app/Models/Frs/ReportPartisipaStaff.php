<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ReportPartisipaStaff extends Model
{
    protected $table = 'frs_report_partisipa_staffs';
    protected $fillable = ['report_id','user_id'];
}
