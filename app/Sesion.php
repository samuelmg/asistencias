<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $table = 'sesiones';
    public $timestamps = false;
    protected $fillable = ['evento_id', 'descripcion', 'inicio', 'fin'];

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }
}
