<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cartao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartao', function (Blueprint $table) {
            $table->bigIncrements('id_cartao');
            $table->string('nm_numero_cartao');
            $table->date('dt_data_validade');
            $table->string('nm_nome_cartao');
            $table->unsignedBigInteger('co_tipo_cartao');
            $table->boolean('st_status');
        });

        Schema::table('cartao', function (Blueprint $table) {
            $table->foreign('co_tipo_cartao')->references('id_tipo_cartao')->on('tipo_cartao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartao');
    }
}
