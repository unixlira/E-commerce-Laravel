<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersAcrescentarCampos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('tipo_autor_id')->nullable()->unsigned();
            $table->foreign('tipo_autor_id')->references('id')->on('tipos_autores');
            $table->string('rg');
            $table->string('cpf');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->string('telefone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['tipo_autor_id']);
            $table->dropColumn('tipo_autor_id');
            $table->dropColumn('rg');
            $table->dropColumn('cpf');
            $table->dropColumn('endereco');
            $table->dropColumn('numero');
            $table->dropColumn('complemento');
            $table->dropColumn('cidade');
            $table->dropColumn('estado');
            $table->dropColumn('cep');
            $table->dropColumn('telefone');
        });
    }
}
