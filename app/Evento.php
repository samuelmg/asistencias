<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sesiones()
    {
        return $this->hasMany(Sesion::class);
    }
}
