<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['name','alias'];
    protected $table = ['frs_programs'];
}
