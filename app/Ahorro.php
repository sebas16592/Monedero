<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ahorro extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ahorroDetalle()
    {
        return $this->hasMany(AhorroDetalle::class);
    }
}
