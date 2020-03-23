<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class MonitoringTool extends Model
{
    protected $fillable = ['name'];
    protected $table = ['frs_monitoring_tools'];
}
