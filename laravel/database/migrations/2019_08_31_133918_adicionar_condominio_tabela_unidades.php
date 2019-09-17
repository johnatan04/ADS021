<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarCondominioTabelaUnidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unidades', function (Blueprint $table) {
            $table->integer('condominio_id')->unsigned();
            $table->foreign('condominio_id')->references('id')->on('condominios');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unidades', function (Blueprint $table) {
            $table->dropForeign('unidades_condominio_id_foreing');
            $table->dropColumn('condominio_id');
        });
    }
}
