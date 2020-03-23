<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['alias','name','description'];
    protected $table = ['frs_cycles'];
}
