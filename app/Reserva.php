<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
 	protected $table = "reservas"
	protected $fillable = ['fecha_entrada_reserva', 'fecha_salida_reserva', 'cantidad_habitaciones_reserva', 'cantidad_personas_reserva'];

	public function habitacions()
    {
        return $this->belongsToMany('App\Habitacion');
    }

    public function paquete_hotels()
    {
        return $this->belongsToMany('App\Paquetehotel');
    }

}
