<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('producto_detalle');
            $table->integer('cantidad_detalle');
            $table->integer('subtotal_detalle');
            $table->integer('descuento_detalle');
            $table->integer('total_detalle');
            $table->string('metodo_pago_detalle');
            $table->dateTime('fecha_compra_detalle');
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
        Schema::dropIfExists('detalles');
    }
}
