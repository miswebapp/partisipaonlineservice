<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class FrsRole extends Model
{
    protected $fillable = ['name','description'];
    protected $table="frs_roles";
    
}
