<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function eventos()
    {
        return $this->belongsToMany(Evento::class);
    }

    public function sesiones()
    {
        return $this->belongsToMany(Sesion::class)->withPivot('checkin', 'checkout');
    }
}
