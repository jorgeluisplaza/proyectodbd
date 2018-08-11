<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioservicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_servicios', function (Blueprint $table) {
            $table->increments('id');

            /*Llaves foráneas*/

            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');

            $table->integer('id_email_usuario')->unsigned();
            $table->foreign('id_email_usuario')->references('id')->on('users');

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
        Schema::dropIfExists('usuario_servicios');
    }
}
