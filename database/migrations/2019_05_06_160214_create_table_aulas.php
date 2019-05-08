<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAulas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->bigIncrements('AUL_CODIGO');
            $table->unsignedBigInteger('MOD_CODIGO');
            $table->string('AUL_NOME');
            $table->unsignedBigInteger('TXT_CODIGO');
            $table->unsignedBigInteger('EXE_CODIGO');

            //Criação das chaves estrangeiras
            $table->foreign('MOD_CODIGO')->references('MOD_CODIGO')->on('modulos');
            $table->foreign('TXT_CODIGO')->references('TXT_CODIGO')->on('textos');
            $table->foreign('EXE_CODIGO')->references('EXE_CODIGO')->on('exercicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aulas');
    }
}
