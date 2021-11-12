<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdKategoriForumToTopikForumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topik_forum', function (Blueprint $table) {
            $table->unsignedBigInteger('id_kf')->after('id_user');
            $table->foreign('id_kf')->references('id')->on('kategori_forum')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topik_forum', function (Blueprint $table) {
            //
        });
    }
}