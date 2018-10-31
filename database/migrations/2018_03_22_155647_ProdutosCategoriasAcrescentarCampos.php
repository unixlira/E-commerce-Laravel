<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutosCategoriasAcrescentarCampos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos_categorias', function (Blueprint $table) {
            $table->string('subtitulo');
            $table->text('texto_esquerda');
            $table->text('texto_direita');
            $table->string('imagem_destaque');
            $table->string('arquivo');
            
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
            $table->dropColumn('subtitulo');
            $table->dropColumn('texto_esquerda');
            $table->dropColumn('texto_direita');
            $table->dropColumn('imagem_destaque');
            $table->dropColumn('arquivo');
        });
    }
}
