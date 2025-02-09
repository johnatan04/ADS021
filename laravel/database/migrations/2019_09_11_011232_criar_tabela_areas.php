<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAreas extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('local');
            $table->boolean('situacao');
            $table->integer('condominio_id')->unsigned();
            $table->foreign('condominio_id')->references('id')->on('condominios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('areas');
    }

}
