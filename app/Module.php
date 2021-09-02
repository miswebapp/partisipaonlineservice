<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table="sys_modules";
    protected $fillable=['name','alias','controller_namespace','model_namespace','view_namespace','route_name','description'];

    public function sysmodules()
    {
        return $this->hasMany(SystemModule::class);
    }

    public function user()
    {
        return $this->belongsToMany(UserDetails::class,'user_module_role','module_id','user_id');
    }
}
