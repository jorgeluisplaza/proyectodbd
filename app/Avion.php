<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    protected $table = "avions"
	protected $fillable = ['nombre_avion', 'capacidad_asientos_avion', 'capacidad_equipaje_avion', 'asientos_pc_avion', 'asientos_tur_avion', 'asientos_ejec_avion', 'descripcion_avion'];

	
	public function vuelos()
    {
        return $this->belongsToMany('App\Vuelo');
    }

}
