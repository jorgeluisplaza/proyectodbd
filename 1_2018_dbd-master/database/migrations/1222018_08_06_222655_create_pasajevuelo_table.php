<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasajevueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasaje_vuelos', function (Blueprint $table) {
            $table->increments('id');

            /*Llaves foráneas*/
            $table->integer('id_pasaje')->unsigned();
            $table->foreign('id_pasaje')->references('id')->on('pasajes');

            $table->integer('id_vuelo')->unsigned();
            $table->foreign('id_vuelo')->references('id')->on('vuelos');

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
        Schema::dropIfExists('pasaje_vuelos');
    }
}
