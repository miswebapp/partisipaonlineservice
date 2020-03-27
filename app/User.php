<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function details()
    {
        return $this->belongsTo(UserDetails::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_role','account_id','role_id');
    }

    public function modules()
    {
        return $this->belongsToMany(SystemModule::class,'user_modules','user_id','module_id');
    }

    public function hasRole($role)
    {   
        return $this->roles()->where('name',$role)->first() ? true : false;
    }

    public function hasAnyRoles($role)
    {
        return $this->roles()->where('name',$role)->first() ? true : false;
    }

}
