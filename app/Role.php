<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function account()
    {
        return $this->belongsToMany(User::class,'user_role','role_id','account_id');
    }
}
