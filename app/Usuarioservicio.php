<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarioservicio extends Model
{
    protected $table = "usuario_servicios"
	protected $fillable = ['id_usuario', 'id_email_usuario', 'id_pasaje', 'id_reserva', 'id_actividad', 'id_traslado', 'id_traslado', 'id_servicio'];


	

}
