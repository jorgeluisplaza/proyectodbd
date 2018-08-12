<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasaje extends Model
{
    protected $table = "pasajes"
	protected $fillable = ['clase_pasaje', 'asiento_pasaje', 'fecha_salida_pasaje','fecha_llegada_pasaje', 'id_paquete_hotel', 'id_paquete_auto'];

	public function paquete_hotel()
    {
        return $this->belongsTo('App\Paquetehotel');
    }

    public function paquete_auto()
    {
        return $this->belongsTo('App\Paqueteauto');
    }

    public function vuelos()
    {
        return $this->belongsToMany('App\Vuelo');
    }

}
