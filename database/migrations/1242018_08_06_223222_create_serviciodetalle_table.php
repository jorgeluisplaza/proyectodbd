<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciodetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_detalles', function (Blueprint $table) {
            $table->increments('id');



             /*Llaves foráneas*/
            $table->integer('id_pasaje')->unsigned();
            $table->foreign('id_pasaje')->references('id')->on('pasajes');

            $table->integer('id_reserva')->unsigned();
            $table->foreign('id_reserva')->references('id')->on('reservas');

            $table->integer('id_actividad')->unsigned();
            $table->foreign('id_actividad')->references('id')->on('actividads');

            $table->integer('id_traslado')->unsigned();
            $table->foreign('id_traslado')->references('id')->on('traslados');

            $table->integer('id_servicio')->unsigned();
            $table->foreign('id_servicio')->references('id')->on('servicios');

            $table->integer('id_detalle')->unsigned();
            $table->foreign('id_detalle')->references('id')->on('detalles');
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
        Schema::dropIfExists('servicio_detalles');
    }
}
