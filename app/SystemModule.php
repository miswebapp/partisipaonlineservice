<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemModule extends Model
{
    protected $table="sys_modules";
    protected $fillable=['name','alias','controller_namespace','model_namespace','view_namespace','route_name','description'];

    public function member()
    {
        return $this->belongsToMany(UserDetails::class,'user_modules','module_id','user_id');
    }
}
