<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_avion');
            $table->integer('capacidad_asientos_avion');
            $table->float('capacidad_equipaje_avion');
            $table->integer('asientos_pc_avion');
            $table->integer('asientos_tur_avion');
            $table->integer('asientos_ejec_avion');
            $table->string('descripcion_avion');
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
        Schema::dropIfExists('avions');
    }
}
