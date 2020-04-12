<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class ActivityCategory extends Model
{
    protected $fillable = ['alias','name','description'];
    protected $table = 'frs_activity_categories';
}
