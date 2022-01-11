<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModule extends Model
{
    protected $table="user_module";
    protected $fillable=['user_id','module_id'];

    public function user()
    {
        return $this->belongsTo(UserDetails::class,'user_id');
    }
    public function module()
    {
        return $this->belongsTo(Module::class,'module_id');
    }

    public function isExisted($module_id , $user_id)
    {
            $user = App\UserDetails::find($user_id);
            $module = App\Module::find($module_id);
            //get $user's roles. This ill return an array of role objects that are belong to $user
            $userRusermodules= $user->module;
            //check whether $role is in that array
            if(in_array($role, $userRoles)){
            //do something
            }
    }
}
