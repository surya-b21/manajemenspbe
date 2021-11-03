<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdTopikToKomentarForumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_forum', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->after('isi');
            $table->foreign('id_user')->references('id')->on('users')->on('opd')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_topik')->after('id_user');
            $table->foreign('id_topik')->references('id')->on('topik_forum')->on('opd')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_forum', function (Blueprint $table) {
            //
        });
    }
}
