<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blok', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->float('jum_lot_total',8,2);
            $table->float('anggaran_kos',10,2);
            $table->integer('status_batal');
            $table->integer('fasa_pengambilan');
            $table->string('rujukan_jkptg');
            $table->string('rujukan_jps');
            $table->string('jajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
