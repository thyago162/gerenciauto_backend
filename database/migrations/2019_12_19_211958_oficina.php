<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Oficina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficina', function (Blueprint $table) {
            $table->bigIncrements('id_oficina');
            $table->string('nm_oficina');
            $table->string('cnpj');
            $table->unsignedBigInteger('co_pessoa');
            $table->unsignedBigInteger('co_telefone');
            $table->unsignedBigInteger('co_endereco');
            $table->boolean('st_ativo');
            
        });

        Schema::table('oficina', function (Blueprint $table) {
            $table->foreign('co_pessoa')->references('id_pessoa')->on('pessoa');
            $table->foreign('co_telefone')->references('id_telefone')->on('telefone');
            $table->foreign('co_endereco')->references('id_endereco')->on('endereco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oficina');
    }
}
