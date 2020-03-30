<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;
use App\UserDetails;
class Team extends Model
{
    protected $fillable = ['alias','name','description'];
    protected $table = "frs_teams";

    public function member()
    {
        return $this->belongsToMany(UserDetails::class,'frs_users_teams','team_id','user_id');
    }
}
