<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemModule extends Model
{
    protected $table="sys_modules";
    protected $fillable=['name','alias','controller_namespace','model_namespace','view_namespace','description'];

    public function users()
    {
        return $this->belongsToMany(UserDetails::class,'user_modules','module_id','user_id');
    }
}
