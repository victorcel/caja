<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTable extends Migration
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
            $table->integer('tarjeta_id')->unsigned();
            $table->integer('transaccion_id')->unsigned();
            $table->integer('subtotal')->unsigned();
            $table->foreign('tarjeta_id')
                ->references('id')
                ->on('tarjetas');
            $table->foreign('transaccion_id')
                ->references('id')
                ->on('transaccions');
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
