<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table="frs_positions";
    protected $fillable = ["alias","name","description"];
}
