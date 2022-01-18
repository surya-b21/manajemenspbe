<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_umum', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('jenis_urusan');
            // $table->unsignedBigInteger('id_smart')->after("kategori");
            // $table->foreign('id_smart')->references('id')->on('elemen_smart_forum')->onDelete('cascade')->onUpdate('cascade');;
            $table->integer('create_by')->nullable();
            $table->integer('update_by')->nullable();
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
        Schema::dropIfExists('kategori_umum_');
    }
}
