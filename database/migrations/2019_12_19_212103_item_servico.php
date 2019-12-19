<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_servico', function (Blueprint $table) {
            $table->bigIncrements('id_item_servico');
            $table->unsignedBigInteger('co_ordem_servico');
            $table->unsignedBigInteger('co_item');
            $table->unsignedBigInteger('co_prioridade');
            $table->string('nm_parecer');
        });

        Schema::table('item_servico', function (Blueprint $table) {
            $table->foreign('co_ordem_servico')->references('id_ordem_servico')->on('ordem_servico');
            $table->foreign('co_item')->references('id_item')->on('item');
            $table->foreign('co_prioridade')->references('id_prioridade')->on('prioridade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_servico');
    }
}