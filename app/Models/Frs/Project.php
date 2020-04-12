<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','description'];
    protected $table = 'frs_projects';
}
