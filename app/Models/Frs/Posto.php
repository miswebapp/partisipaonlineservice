<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    protected $fillable = ['name','longitude','latitude'];
    protected $table = ['frs_categories'];
}
