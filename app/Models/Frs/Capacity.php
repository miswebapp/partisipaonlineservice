<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    protected $table="frs_capacities";
    protected $fillable=['name','description'];
}
