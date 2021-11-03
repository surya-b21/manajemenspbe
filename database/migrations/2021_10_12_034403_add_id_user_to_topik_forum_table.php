<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdUserToTopikForumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topik_forum', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->after('foto_path');
            $table->foreign('id_user')->references('id')->on('users')->on('opd')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_kf')->after('id_user');
            $table->foreign('id_kf')->references('id')->on('kategori_forum')->on('opd')->onDelete('cascade')->onUpdate('cascade');
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
