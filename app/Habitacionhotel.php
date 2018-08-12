<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacionhotel extends Model
{
    protected $table = "habitacion_hotels"
	protected $fillable = ['id_habitacion', 'id_hotel'];


	
}
