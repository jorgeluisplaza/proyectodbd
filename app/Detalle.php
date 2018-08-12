<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
 	protected $table = "detalles"
	protected $fillable = ['producto_detalle', 'cantidad_detalle', 'subtotal_detalle', 'descuento_detalle', 'total_detalle', 'metodo_pago_detalle', 'fecha_compra_detalle'];

	public function servicios()
    {
        return $this->belongsToMany('App\Servicio');
    }

}
