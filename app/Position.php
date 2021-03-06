<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table='positions';

    public function userdetails()
    {
        return $this->belongsToMany(User::class,'employments','position_id','user_id');
    }
}
