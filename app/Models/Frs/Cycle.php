<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    protected $fillable = ['name'];
    protected $table = ['frs_cycles'];
}
