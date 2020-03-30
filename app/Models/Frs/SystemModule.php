<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class SystemModule extends Model
{
    protected $table="sys_modules";

    public function users()
    {
        return $this->belongsToMany(UserDetails::class,'user_modules','module_id','user_id');
    }
}
