<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','description'];
    protected $table = 'frs_categories';
}
