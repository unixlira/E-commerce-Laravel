<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutosCategoriasCatalogo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos_categorias', function (Blueprint $table) {
            $table->string('catalogo_pdf')->after('imagem');
            $table->string('tabela_precos')->after('catalogo_pdf');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos_categorias', function (Blueprint $table) {
            $table->dropColumn('catalogo_pdf');
            $table->dropColumn('tabela_precos');
        });
    }
}
