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
            $table->integer('id_mukim');
            $table->foreign('id_mukim')->reference('id')->on('mukim')->onDelete('cascade');
            $table->integer('id_lokaliti');
            $table->foreign('id_lokaliti')->reference('id')->on('lokaliti')->onDelete('cascade');
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
