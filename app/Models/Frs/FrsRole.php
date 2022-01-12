<?php

namespace App\Models\Frs;

use App\UserDetails;
use Illuminate\Database\Eloquent\Model;

class FrsRole extends Model
{
    protected $fillable = ['name','description'];
    protected $table="frs_roles";
    
    public function frsteamrole()
    {
        return $this->belongsToMany(UserDetails::class,'frs_user_team_roles','user_id','role_id');
    }

    public function memberrole()
    {
        return $this->belongsToMany(Team::class,'frs_user_team_roles','team_id','role_id');
    }
}
