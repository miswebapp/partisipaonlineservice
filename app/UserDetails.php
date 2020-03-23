<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'dob',
    ];
    public function account()
    {
        return $this->hasOne(User::class,'user_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function employment()
    {
        return $this->hasOne(Employment::class,'user_id');
    }

    public function getFullNamesAttribute()
    {
        return $this->firstname.' '. $this->lastname;
        
    }

    public function position()
    {
        return $this->belongsToMany(Position::class,'employments','user_id','position_id');
    }

    public function department()
    {
        return $this->belongsToMany(Department::class,'employments','user_id','department_id');
    }
    public function reports()
    {
        return $this->hasMany(Report::class,'user_id');
    }
}
