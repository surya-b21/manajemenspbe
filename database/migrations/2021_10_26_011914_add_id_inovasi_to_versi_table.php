<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdInovasiToVersiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('versi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_inovasi')->after('id_dev');
            $table->foreign('id_inovasi')->references('id')->on('inovasi')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('versi', function (Blueprint $table) {
            //
        });
    }
}
