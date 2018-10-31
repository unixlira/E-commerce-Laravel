<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');

            $table->integer('numero');

            $table->double('total');

            $table->string('endereco_rua');

            $table->string('endereco_numero');

            $table->string('endereco_complemento');

            $table->string('cidade');

            $table->string('uf');

            $table->string('cep');
            
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('pedidos_status');

           
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
        Schema::drop('pedidos');
    }
}
