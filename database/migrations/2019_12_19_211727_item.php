<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Item extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->bigIncrements('id_item');
            $table->string('nm_item');
            $table->integer('nu_quantidade');
            $table->double('nu_valor_unitario',2);
            $table->unsignedBigInteger('co_tipo_bem');
        });

        Schema::table('item', function (Blueprint $table) {
            $table->foreign('co_tipo_item')->references('id_tipo_item')->on('tipo_item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
