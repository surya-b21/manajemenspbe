<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdOpdToInovasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inovasi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_opd');
            $table->foreign('id_opd')->references('id_opd')->on('opd');
            $table->unsignedBigInteger('id_ku');
            $table->foreign('id_ku')->references('id_ku')->on('kategori_umum');
            $table->unsignedBigInteger('id_esmart');
            $table->foreign('id_esmart')->references('id_esmart')->on('elemen_smart');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inovasi', function (Blueprint $table) {
            //
        });
    }
}
