<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservahabitacion extends Model
{
    protected $table = "reserva_habitacions"
	protected $fillable = ['id_habitacion', 'id_reserva'];


}
