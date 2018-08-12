<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionhotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion_hotels', function (Blueprint $table) {
            $table->increments('id');

            /*Llaves foráneas*/
            $table->integer('id_habitacion')->unsigned();
            $table->foreign('id_habitacion')->references('id')->on('habitacions');

            $table->integer('id_hotel')->unsigned();
            $table->foreign('id_hotel')->references('id')->on('hotels');


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
        Schema::dropIfExists('habitacion_hotels');
    }
}
