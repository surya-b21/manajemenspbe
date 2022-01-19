<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IdSmart extends Migration
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
            $table->unsignedBigInteger('id_smart')->after("jenis_urusan");
            $table->foreign('id_smart')->references('id')->on('elemen_smart_forum')->onDelete('cascade')->onUpdate('cascade');;
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
