<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostaGraficasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resposta_graficas', function (Blueprint $table) {
            //$table->increments('id');

            $table->integer('grafica_id')->unsigned();
            $table->foreign('grafica_id')->references('id')->on('graficas');

            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');

            $table->double('valor', 6, 2);
            $table->string('observacao');

            $table->primary(['grafica_id', 'pedido_id']);

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
        Schema::dropIfExists('resposta_graficas');
    }
}
