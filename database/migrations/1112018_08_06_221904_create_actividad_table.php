<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_actividad');
            $table->string('descripcion_actividad');
            $table->string('ciudad_actividad');
            $table->integer('cantidad_menores_actividad');
            $table->integer('cantidad_mayores_actibvidad');
            $table->string('informacion_adicional_actividad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividads');
    }
}
