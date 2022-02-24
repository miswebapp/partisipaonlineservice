<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Frs\Team;
use App\Models\Frs\FrsRole as Role;
class UserDetails extends Model
{
    protected $fillable = [
        'niss','firstname', 'lastname','alias','gender','dob','email','telephone','nationality'
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
    public function frsreports()
    {
        return $this->hasMany(Report::class,'user_id');
    }

    public function frsteam()
    {
        return $this->belongsToMany(Team::class,'frs_user_team_roles','user_id','team_id');
    }

    public function frsteamrole()
    {
        return $this->belongsToMany(Role::class,'frs_user_team_roles','user_id','role_id');
    }

    public function sysmodules()
    {
        return $this->hasMany(UserModule::class,'user_id');
    }

    public function module()
    {
        return $this->belongsToMany(Module::class,'user_module_role','user_id','module_id');
    }
    public function partisipastaffs()
    {
        return $this->belongsToMany(UserDetails::class,'frs_report_partisipa_staffs','report_id','user_id');
    }   

    public function getTeamId(){
        return $this->team();
    }
    
}
