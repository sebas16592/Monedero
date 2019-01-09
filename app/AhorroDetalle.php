<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AhorroDetalle extends Model
{
    //
    protected $guarded = [];
    public function ahorro()
    {
        return $this->belongsTo(Ahorro::class);
    }
}
