<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuaisColetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
         
    public function up()
    {
        Schema::create('manuais_coletas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');

            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('produtos_categorias');

            $table->string('nome');
            $table->text('descricao');

            $table->boolean('inativo')->index();
            $table->string('slug')->index();

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
        Schema::drop('manuais_coletas');
    }
}
