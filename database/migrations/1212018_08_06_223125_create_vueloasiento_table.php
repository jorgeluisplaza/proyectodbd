<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVueloasientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo_asientos', function (Blueprint $table) {
            $table->increments('id');

            /*Llaves foráneas*/
            $table->integer('id_asiento')->unsigned();
            $table->foreign('id_asiento')->references('id')->on('asientos');

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
        Schema::dropIfExists('vuelo_asientos');
    }
}
