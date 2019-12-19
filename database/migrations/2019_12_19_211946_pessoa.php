<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->bigIncrements('id_pessoa');
            $table->string('nm_pessoa');
            $table->string('nm_cpf');
            $table->string('nm_email');
            $table->char('cs_sexo');
            $table->unsignedBigInteger('co_telefone');
            $table->unsignedBigInteger('co_endereco');
            $table->unsignedBigInteger('co_qualificacao_pessoa');
            $table->boolean('st_ativo');
        });

        Schema::table('pessoa', function (Blueprint $table) {
            $table->foreign('co_telefone')->references('id_telefone')->on('telefone');
            $table->foreign('co_endereco')->references('id_endereco')->on('endereco');
            $table->foreign('co_qualificacao_pessoa')
                ->references('id_qualificacao_pessoa')->on('qualificacao_pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa');
    }
}
