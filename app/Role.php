<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function account()
    {
        return $this->belongsToMany(User::class,'user_role','role_id','account_id');
    }

    public function sysmodules()
    {
        return $this->hasMany(SystemModule::class);
    }

    public function getUserrolesAttributes()
    {   
        return $this->code += $this->code;
    }
}
