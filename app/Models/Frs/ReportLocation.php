<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ReportLocation extends Model
{
    protected $table = "frs_report_locations";
    protected $fillable = ["report_id","municipal_id","posto_id","suco_id"];
}
