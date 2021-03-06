<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'code','name'
    ];

    public function userdetails()
    {
        return $this->belongsToMany(Department::class,'employments','department_id','user_id');
    }
}
