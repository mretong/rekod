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
            $table->integer('id_blok');
            $table->integer('id_mukim');
            $table->integer('id_lokaliti');
            $table->integer('jum_lot_total');
            $table->float('anggaran_kos');
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
