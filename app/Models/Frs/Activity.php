<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['name','type','location_level','require_capacity','require_monitoring','require_cycle','require_phase'];
    protected $table = 'frs_activities';

    public function category()
    {
        return $this->belongsTo(ActivityCategory::class);
    }

    public function location()
    {
        return $this->belongsTo(ActivityLocation::class);
    }
}
