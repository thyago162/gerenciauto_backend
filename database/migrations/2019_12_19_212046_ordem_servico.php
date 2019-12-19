<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdemServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servico', function (Blueprint $table) {
            $table->bigIncrements('id_ordem_servico');
            $table->double('nu_valor_total',2);
            $table->integer('nu_avaliacao_servico');
            $table->date('dt_servico');
            $table->unsignedBigInteger('co_cliente');
            $table->unsignedBigInteger('co_responsavel_tecnico');
            $table->unsignedBigInteger('co_tipo_servico');
            $table->unsignedBigInteger('co_status_servico');
            $table->unsignedBigInteger('co_status_pagamento');
            $table->unsignedBigInteger('co_veiculo');
            
        });

        Schema::table('ordem_servico', function (Blueprint $table) {
            $table->foreign('co_cliente')->references('id_pessoa')->on('pessoa');
            $table->foreign('co_responsavel_tecnico')->references('id_pessoa')->on('pessoa');
            $table->foreign('co_tipo_servico')->references('id_tipo_servico')->on('tipo_servico');
            $table->foreign('co_status_servico')->references('id_status_servico')->on('status_servico');
            $table->foreign('co_status_pagamento')->references('id_status_pagamento')->on('status_pagamento');
            $table->foreign('co_veiculo')->references('id_veiculo')->on('veiculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordem_servico');
    }
}
