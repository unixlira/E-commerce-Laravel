<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PedidosStatusCor extends Migration
{
   public function up()
    {
    Schema::table('pedidos_status', function (Blueprint $table) {
       
            $table->string('cor')->after('nome');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedidos_status', function (Blueprint $table) {
            $table->dropColumn('cor');
        });
    }
}
