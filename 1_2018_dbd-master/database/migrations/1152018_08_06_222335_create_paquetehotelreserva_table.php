<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetehotelreservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete_hotel_reservas', function (Blueprint $table) {
            $table->increments('id');



            /*Llaves foráneas*/
            $table->integer('id_paquete_hotel')->unsigned();
            $table->foreign('id_paquete_hotel')->references('id')->on('paquete_hotels');

            $table->integer('id_reserva')->unsigned();
            $table->foreign('id_reserva')->references('id')->on('reservas');
            
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
        Schema::dropIfExists('paquete_hotel_reservas');
    }
}
