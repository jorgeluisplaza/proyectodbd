<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = "hotels"
	protected $fillable = ['ciudad_hotel', 'numero_habitaciones_hotel', 'nombre_hotel', 'descripcion_hotel', 'estrellas_hotel', 'calificacion_hotel'];

	public function habitacions()
    {
        return $this->belongsToMany('App\Habitacion');
    }
}
