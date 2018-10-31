<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DistribuidoresTitulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('distribuidores', function (Blueprint $table) {
            $table->string('titulo')->after('empresa_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('distribuidores', function (Blueprint $table) {
            $table->dropColumn('titulo');
        });
    }
}
