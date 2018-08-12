<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios"
	protected $fillable = ['fecha_hora_servicio', 'precio_servicio', 'id_pasaje', 'id_reserva', 'id_actividad', 'id_traslado'];

	public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function detalles()
    {
        return $this->belongsToMany('App\Detalle');
    }

}
