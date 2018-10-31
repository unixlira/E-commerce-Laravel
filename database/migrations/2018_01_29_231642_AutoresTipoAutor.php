<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AutoresTipoAutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('autores', function (Blueprint $table) {
            $table->integer('tipo_autor_id')->after('empresa_id')->unsigned();
            $table->foreign('tipo_autor_id')->references('id')->on('tipos_autores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('autores', function (Blueprint $table) {
            $table->dropColumn('tipo_autor_id');
        });
    }
}
