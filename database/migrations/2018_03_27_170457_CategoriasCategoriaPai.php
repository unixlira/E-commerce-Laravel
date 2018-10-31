<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriasCategoriaPai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::table('produtos_categorias', function (Blueprint $table) {
            $table->integer('categoria_id')->index();
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
            $table->dropColumn('categoria_id');
        });
    }
}
