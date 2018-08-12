<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autopaqueteauto extends Model
{
    protected $table = "auto_paquete_autos"
	protected $fillable = ['id_paquete_auto', 'id_auto'];

}
