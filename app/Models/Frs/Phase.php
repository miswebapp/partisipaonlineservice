<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    protected $fillable = ['name'];
    protected $table = ['frs_phases'];
}
