<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DistribuidoresCep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('distribuidores', function (Blueprint $table) {
            $table->string('cep', 10)->after('uf');
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
            $table->dropColumn('cep');
        });
    }
}
