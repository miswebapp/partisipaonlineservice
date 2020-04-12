<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Municipal extends Model
{
    protected $fillable = ['name','longitude','latitude'];
    protected $table = 'frs_municipals';
}
