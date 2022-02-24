<?php

namespace App\Models\Frs;

use Illuminate\Database\Eloquent\Model;

class Counterpart extends Model
{
    protected $fillable =["name","position_id","institution_id"];
    protected $table="frs_counterparts";

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function municipal()
    {
        return $this->belongsTo(Municipal::class);
    }
    public function capacity()
    {
        return $this->belongsToMany(Capacity::class,'counterpart_id','capacity_id');
    }
}
