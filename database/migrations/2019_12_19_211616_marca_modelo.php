<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MarcaModelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_modelo', function (Blueprint $table) {
            $table->bigIncrements('id_marca_modelo');
            $table->unsignedBigInteger('co_marca');
            $table->unsignedBigInteger('co_modelo');
        });

        Schema::table('marca_modelo', function (Blueprint $table) {
            $table->foreign('co_marca')->references('id_marca')->on('marca_veiculo');
            $table->foreign('co_modelo')->references('id_modelo')->on('modelo_veiculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marca_modelo');
    }
}
