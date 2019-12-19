<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AssinaturaOficina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assinatura_oficina', function (Blueprint $table) {
            $table->bigIncrements('id_assinatura_oficina');
            $table->unsignedBigInteger('co_oficina');
            $table->date('dt_inicio');
            $table->date('dt_fim');
        });

        Schema::table('assinatura_oficina', function (Blueprint $table) {
            $table->foreign('co_oficina')->references('id_oficina')->on('oficina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assinatura_oficina');
    }
}
