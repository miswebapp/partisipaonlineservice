<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table='positions';
    protected $primaryKey = 'id';


    public function useremployement()
    {
        return $this->belongsToMany(Employment::class,'employments','position_id','employee_id');
    }
}
