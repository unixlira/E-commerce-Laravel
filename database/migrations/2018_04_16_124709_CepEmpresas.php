<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CepEmpresas extends Migration
{
    public function up()
    {
    Schema::table('empresas', function (Blueprint $table) {
       
            $table->string('cep')->after('complemento');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empresas', function (Blueprint $table) {
            $table->dropColumn('cep');
        });
    }
}
