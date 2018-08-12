<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paqueteauto extends Model
{
    protected $table = "paquete_autos"
	protected $fillable = ['cantidad_personas_paquete_auto', 'ciudad_recogida_paquete_auto'];

	public function pasajes()
    {
        return $this->hasMany('App\Pasaje');
    }

    public function autos()
    {
        return $this->belongsToMany('App\Auto');
    }
}
