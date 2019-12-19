<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Endereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->bigIncrements('id_endereco');
            $table->integer('nu_cep');
            $table->string('nm_logradouro');
            $table->integer('nu_numero');
            $table->string('nm_complemento');
            $table->string('nm_bairro');
            $table->string('nm_cidade');
            $table->string('nm_uf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
