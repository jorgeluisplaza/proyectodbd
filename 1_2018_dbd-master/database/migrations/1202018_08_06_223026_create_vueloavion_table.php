<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVueloavionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo_avions', function (Blueprint $table) {
            $table->increments('id');

             /*Llaves foráneas*/
            $table->integer('id_avion')->unsigned();
            $table->foreign('id_avion')->references('id')->on('avions');

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
        Schema::dropIfExists('vuelo_avions');
    }
}
