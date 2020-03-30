<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class FrsUser extends Model
{
    protected $table="frs_users";

    public function user()
    {
        return $this->hasOne(UserDetails::class);
    }
}
