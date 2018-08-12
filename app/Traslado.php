<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traslado extends Model
{
    protected $table = "traslados"
	protected $fillable = ['nombre_hotel_traslado', 'nombre_aeropuerto_traslado', 'sentido_traslado', 'fecha_traslado', 'cantidad_personas_traslado'];

	
}
