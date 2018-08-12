<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutopaqueteautoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_paquete_autos', function (Blueprint $table) {
            $table->increments('id');

            /*Llaves foráneas*/
            $table->integer('id_paquete_auto')->unsigned();
            $table->foreign('id_paquete_auto')->references('id')->on('paquete_autos');

            $table->integer('id_auto')->unsigned();
            $table->foreign('id_auto')->references('id')->on('autos');

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
        Schema::dropIfExists('auto_paquete_autos');
    }
}
