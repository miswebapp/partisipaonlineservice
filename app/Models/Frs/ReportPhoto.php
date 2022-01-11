<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ReportPhoto extends Model
{
    protected $table = "frs_report_photos";
    protected $fillable = ["report_id","file_name","file_location"];
}
