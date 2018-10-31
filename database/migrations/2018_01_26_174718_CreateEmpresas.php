<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->index();
            $table->string('razao_social');
            $table->string('nome_fantasia');
            $table->string('logotipo');
            $table->string('rua');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf', 2);
            $table->string('telefone');
            $table->string('fax');
            $table->string('email');
            $table->string('site');
            $table->string('facebook');
            $table->string('facebook_texto');
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
        Schema::drop('empresas');
    }
}
