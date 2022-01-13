<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefEsmartUmum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_esmart_umum', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_esmart');
            $table->foreign('id_esmart')->references('id')->on('elemen_smart')->onDelete('cascade')->onUpdate('cascade');;
            $table->unsignedBigInteger('id_ku');
            $table->foreign('id_ku')->references('id')->on('kategori_umum')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ref_esmart_umum');
    }
}