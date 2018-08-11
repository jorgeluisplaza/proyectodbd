<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialsistemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_sistemas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accion_historial');
            $table->string('valor_inicial_historial');
            $table->string('valor_final_historial');
            $table->string('descripcion_historial');
            
            /*Llave foráneas*/
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');

            $table->integer('id_email_usuario')->unsigned();
            $table->foreign('id_email_usuario')->references('id')->on('users');
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
        Schema::dropIfExists('historial_sistemas');
    }
}
