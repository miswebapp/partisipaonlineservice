<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $fillable = [
        'employee_id', 'user_id', 'position_id','department_id','employee_email','employee_telephone','employee_startdate','employee_enddate'
    ];

    public function position()
    {
        return $this->hasOne(Position::class);
    }
}
