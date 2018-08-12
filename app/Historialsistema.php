<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historialsistema extends Model
{
    protected $table = "historial_sitemas"
	protected $fillable = ['accion_historial', 'valor_inicial_historial', 'valor_final_historial', 'descripcion_historial', 'id_usuario', 'id_email_usuario'];


	public function user()
    {
        return $this->belongsTo('App\User');
    }

}
