<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Weakness extends Model
{
    protected $fillable = ['category_id','name','description'];
    protected $table = 'frs_weaknesses';

    public function category()
    {
        return $this->belongsTo(WeaknessCategory::class);
    }
}
