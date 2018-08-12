<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vueloasiento extends Model
{
   	protected $table = "vuelo_asientos"
	protected $fillable = ['id_asiento', 'id_vuelo'];
}
