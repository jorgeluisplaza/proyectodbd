<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_hora_servicio');
            $table->integer('precio_servicio');

            /*Llaves foráneas*/
            $table->integer('id_pasaje')->unsigned();
            $table->foreign('id_pasaje')->references('id')->on('pasajes');

            $table->integer('id_reserva')->unsigned();
            $table->foreign('id_reserva')->references('id')->on('reservas');

            $table->integer('id_actividad')->unsigned();
            $table->foreign('id_actividad')->references('id')->on('actividads');

            $table->integer('id_traslado')->unsigned();
            $table->foreign('id_traslado')->references('id')->on('traslados');

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
        Schema::dropIfExists('servicios');
    }
}
