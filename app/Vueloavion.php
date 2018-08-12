<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vueloavion extends Model
{
    protected $table = "vuelo_avions"
	protected $fillable = ['id_vuelo', 'id_avion'];
}
