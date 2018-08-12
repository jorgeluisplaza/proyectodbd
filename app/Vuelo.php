<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    protected $table = "vuelos"
	protected $fillable = ['tiempo_viaje_vuelo', 'aerolinea_vuelo'];


	public function pasajes()
    {
        return $this->belongsToMany('App\Pasaje');
    }

    public function asientos()
    {
        return $this->belongsToMany('App\Asiento');
    }

    public function avions()
    {
        return $this->belongsToMany('App\Avion');
    }
}


