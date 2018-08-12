<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
	protected $table = "Rols"
	protected $fillable = ['tipo_rol','permisos_rol'];
	
	public function Users()
	{
		return $this->hasMany('App\User');
	}
  
}
