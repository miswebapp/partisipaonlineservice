<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class FrsRole extends Model
{
    protected $fillable = ['name','description'];
    protected $table="frs_roles";
    
    public function frsteamrole()
    {
        return $this->belongsToMany(Role::class,'frs_user_team_roles','user_id','role_id');
    }
}
