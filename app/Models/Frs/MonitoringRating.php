<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class MonitoringRating extends Model
{
    protected $fillable = ['name','description'];
    protected $table = 'frs_monitoring_ratings';
}
