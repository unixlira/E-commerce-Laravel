<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('produtos_categorias');
            $table->string('slug')->index();
            $table->string('nome');
            $table->string('imagem');
            $table->double('preco');
            $table->string('tradutores');
            $table->string('capa_livro');
            $table->string('release');
            $table->text('sinopse');
            $table->text('atividades_sugeridas');
            $table->string('video');
            $table->text('carroussel');
            $table->string('tamanho');
            $table->string('paginas');
            $table->string('faixa_etaria');
            $table->string('isbn')->index();
            $table->string('tema');
            $table->boolean('inativo')->index();
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
        Schema::drop('produtos');
    }
}
