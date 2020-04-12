<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ProjectActivity extends Model
{
    protected $fillable = ['name'];
    protected $table = 'frs_project_activities';
}
