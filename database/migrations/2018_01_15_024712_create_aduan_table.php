<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aduan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_aduan');
            $table->date('tarikh_terima');
            $table->date('tarikh_selesai');
            $table->string('masa_terima');
            $table->integer('no_pekerja');
            $table->integer('id_lot');
            $table->integer('id_blok');
            $table->string('no_hakmilik');
            $table->string('nama_pengadu');
            $table->string('no_tel');
            $table->string('catatan');
            $table->string('maklumbalas');
            $table->string('pemaklum');
            $table->integer('status_aduan');
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
