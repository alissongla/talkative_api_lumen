<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('USU_CODIGO');
            $table->string('USU_NOME');
            $table->string('USU_EMAIL')->unique();
            $table->string('USU_TELEFONE')->nullable($value = true);
            $table->string('USU_LOGIN')->unique();
            $table->string('USU_SENHA');
            $table->unsignedBigInteger('MOD_CODIGO')->nullable($value = true);
            $table->timestamps();

            //Criação das chaves estrangeiras
            $table->foreign('MOD_CODIGO')->references('MOD_CODIGO')->on('modulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
