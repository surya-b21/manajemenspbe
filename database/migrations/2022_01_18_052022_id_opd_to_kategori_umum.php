<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IdOpdToKategoriUmum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategori_umum', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('id_opd')->after("jenis_urusan");
            $table->foreign('id_opd')->references('id')->on('opd')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kategori_umum', function (Blueprint $table) {
            //
        });
    }
}
