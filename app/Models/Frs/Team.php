<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;
use App\UserDetails;
use App\Models\Frs\FrsRole as Role;
class Team extends Model
{
    protected $fillable = ['alias','name','description'];
    protected $table = "frs_teams";

    public function member()
    {
        return $this->belongsToMany(UserDetails::class,'frs_user_team_roles','team_id','user_id');
    }

    public function memberrole()
    {
        return $this->belongsToMany(Role::class,'frs_user_team_roles','team_id','role_id');
    }

    public function hasPreviousCoordinator()
    {
        return $this->memberrole()->where('role_id',3)->exists();
    }

    public function hasMember($user_id)
    {
        return $this->member()->where('user_id',$user_id)->exists();
    }

    public function getCoordinatorMemberId()
    {
        return $this->member()->where('role_id',3);
    }
}
