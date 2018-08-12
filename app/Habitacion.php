<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = "habitacions"
	protected $fillable = ['tipo_habitacion', 'capacidad_habitacion', 'disponibilidad_habitacion', 'descripcion_habitacion'];


	public function reservas()
    {
        return $this->belongsToMany('App\Reserva');
    }

    public function hotels()
    {
        return $this->belongsToMany('App\Hotel');
    }
}
