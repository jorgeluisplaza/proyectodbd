<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{


	protected $table = "asientos"
	protected $fillable = ['disponibilidad_asiento', 'tipo_asiento', 'ubicacion_asiento'];

	public function vuelos()
    {
        return $this->belongsToMany('App\Vuelo');
    }


}
