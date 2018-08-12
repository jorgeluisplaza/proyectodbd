<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = "autos"
	protected $fillable = ['patente_auto', 'nombre_compania_auto', 'fecha_arriendo_auto', 'fecha_devolucion_auto'];


	public function paquete_autos()
    {
        return $this->belongsToMany('App\Paqueteauto');
    }

}
