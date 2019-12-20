<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Veiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo', function (Blueprint $table) {
            $table->bigIncrements('id_veiculo');
            $table->unsignedBigInteger('co_modelo_veiculo');
            $table->string('nm_placa');
            $table->string('nm_cor');
            $table->date('dt_ano');
            $table->boolean('st_status');
        });

        Schema::table('veiculo', function (Blueprint $table) {
            $table->foreign('co_modelo_veiculo')
                ->references('id_modelo')->on('modelo_veiculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculo');
    }
}
