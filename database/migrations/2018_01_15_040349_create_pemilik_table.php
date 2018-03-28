<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemilikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilik', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_blok');
            $table->integer('id_lot');
            $table->string('nama');
            $table->string('no_kp');
            $table->integer('id_status');
            $table->string('pecahan');
            $table->date('tarikh_h');
            $table->date('tarikh_terima');
            $table->string('rujukan_jkptg');
            $table->string('rujukan_jps');
            $table->integer('kategori_pampasan');
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
