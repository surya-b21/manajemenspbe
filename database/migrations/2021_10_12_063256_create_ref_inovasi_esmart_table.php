<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefInovasiEsmartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_inovasi_esmart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_inovasi');
            $table->foreign('id_inovasi')->references('id')->on('inovasi')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_esmart');
            $table->foreign('id_esmart')->references('id')->on('elemen_smart')->onDelete('cascade')->onUpdate('cascade');;
            $table->integer('create_by');
            $table->integer('update_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_inovasi_esmart');
    }
}
