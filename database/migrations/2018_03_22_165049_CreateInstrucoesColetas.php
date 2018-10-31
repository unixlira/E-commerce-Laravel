<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrucoesColetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrucoes_coletas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');

            $table->integer('manual_coleta_id')->unsigned();
            $table->foreign('manual_coleta_id')->references('id')->on('manuais_coletas');

            $table->string('nome');
            $table->string('subtitulo');
            $table->text('conteudo');
            $table->string('video');
            $table->string('imagem');

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
        Schema::drop('instrucoes_coletas');
    }
}