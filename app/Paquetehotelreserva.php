<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquetehotelreserva extends Model
{
   	protected $table = "paquete_hotel_reservas"
	protected $fillable = ['id_paquete_hotel', 'id_reserva'];
            

}
