<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquetehotel extends Model
{
    protected $table = "paquete_hotels"
	protected $fillable = ['cantidad_habitaciones_paquete_hotel', 'cantidad_personas_paquete_hotel'];

	public function reservas()
    {
        return $this->belongsToMany('App\Reserva');
    }

    public function pasajes()
    {
        return $this->hasMany('App\Pasaje');
    }
}
