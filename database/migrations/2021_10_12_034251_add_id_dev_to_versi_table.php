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
            $table->unsignedBigInteger('id_dev');
            $table->foreign('id_dev')->references('id_dev')->on('developer');
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
