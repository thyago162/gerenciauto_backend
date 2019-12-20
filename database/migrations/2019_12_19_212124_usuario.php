<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('nm_email');
            $table->string('nm_senha');
            $table->string('nm_token_recuperacao')->nullable();
            $table->unsignedBigInteger('co_qualificacao_pessoa');
            $table->date('dt_criacao');
        });

        Schema::table('usuario', function (Blueprint $table) {
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
        Schema::dropIfExists('usuario');
    }
}
