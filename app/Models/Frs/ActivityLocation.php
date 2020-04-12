<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ActivityLocation extends Model
{
    protected $fillable = ['alias','name','description'];
    protected $table = 'frs_activity_locations';
}
