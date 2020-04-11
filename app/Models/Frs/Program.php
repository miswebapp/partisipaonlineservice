<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['name','alias','description'];
    protected $table = 'frs_programs';
}
