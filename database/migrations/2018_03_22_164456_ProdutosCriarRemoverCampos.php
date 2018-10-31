<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutosCriarRemoverCampos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->string('subtitulo');
            $table->string('codigo')->nullable();
            $table->string('prazo');
            $table->string('tipos_de_amostra');
            $table->text('descricao');

            $table->dropColumn('tradutores');
            $table->dropColumn('capa_livro');
            $table->dropColumn('sinopse');
            $table->dropColumn('atividades_sugeridas');
            $table->dropColumn('video');
            $table->dropColumn('carroussel');
            $table->dropColumn('tamanho');
            $table->dropColumn('paginas');
            $table->dropColumn('faixa_etaria');
            $table->dropColumn('isbn');
            $table->dropColumn('tema');
            $table->dropColumn('premios');
            $table->dropColumn('destaque');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('subtitulo');
            $table->dropColumn('codigo');
            $table->dropColumn('prazo');
            $table->dropColumn('tipos_de_amostra');
            $table->dropColumn('descricao');
            
            $table->string('tradutoras');
            $table->string('capa_livro');
            $table->text('sinopse');
            $table->text('atividades_sugeridas');
            $table->string('video');
            $table->text('carroussel');
            $table->string('tamanho');
            $table->string('paginas');
            $table->string('faixa_etaria');
            $table->string('isbn');
            $table->string('tema');
            $table->text('premios');
            $table->boolean('destaque'); 
            
        });
    }
}
