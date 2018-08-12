<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajes', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('clase_pasaje');
            $table->string('asiento_pasaje');
            $table->dateTime('fecha_salida_pasaje');
            $table->dateTime('fecha_llegada_pasaje');

            /*Llaves foráneas*/
            $table->integer('id_paquete_hotel')->unsigned();
            $table->foreign('id_paquete_hotel')->references('id')->on('paquete_hotels');

            $table->integer('id_paquete_auto')->unsigned();
            $table->foreign('id_paquete_auto')->references('id')->on('paquete_autos');

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
        Schema::dropIfExists('pasajes');
    }
}
