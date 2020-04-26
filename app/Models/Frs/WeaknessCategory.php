<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class WeaknessCategory extends Model
{
    protected $fillable = ['name','description'];
    protected $table = 'frs_weakness_categories';
}
