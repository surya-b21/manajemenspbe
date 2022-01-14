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
            $table->unsignedBigInteger('id_opd')->after('status');
            $table->foreign('id_opd')->references('id')->on('opd')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_ku')->after('id_opd');
            $table->foreign('id_ku')->references('id')->on('kategori_umum')->onDelete('cascade')->onUpdate('cascade');
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
