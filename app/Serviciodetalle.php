<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serviciodetalle extends Model
{
    protected $table = "servicio_detalles"
	protected $fillable = ['id_pasaje', 'id_reserva', 'id_actividad', 'id_traslado', 'id_servicio', 'id_detalle'];


