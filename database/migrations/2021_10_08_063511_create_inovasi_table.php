<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInovasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inovasi', function (Blueprint $table) {
            $table->id('id_inovasi');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('layanan_spbe');
            $table->date('tgl_launching');
            $table->date('tgl_upload');
            $table->string('poster_url');
            $table->string('status');
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
        Schema::dropIfExists('inovasi');
    }
}
