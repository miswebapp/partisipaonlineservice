<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Weakness extends Model
{
    protected $fillable = ['name','description'];
    protected $table = 'frs_weaknesses';
}
