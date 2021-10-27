<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdDevToVersiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('versi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_dev')->after('status');
            $table->foreign('id_dev')->references('id')->on('developer')->on('opd')->onDelete('cascade')->onUpdate('cascade');
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
