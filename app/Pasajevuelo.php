<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasajevuelo extends Model
{
    protected $table = "pasaje_vuelos"
	protected $fillable = ['id_pasaje', 'id_vuelo'];

}
