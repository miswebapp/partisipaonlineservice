<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Suco extends Model
{
    protected $fillable = ['name','longitude','latitude'];
    protected $table = 'frs_sucos';
}
