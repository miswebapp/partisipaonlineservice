<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $table="employments";
    protected $primaryKey = 'employee_id';
    protected $fillable = [
        'employee_id', 'user_id', 'position_id','department_id','employee_email','employee_telephone','employee_startdate','employee_enddate'
    ];

    public function position()
    {
        return $this->belongsToMany(Position::class,'employments','employee_id','position_id');
    }

    public function department()
    {
        return $this->belongsToMany(Department::class,'employee_id','department_id');
    }
}
