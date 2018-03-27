<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerbicaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perbicaraan', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tarikh_1');
            $table->date('tarikh_2')->nullable();
            $table->date('tarikh_3')->nullable();
            $table->date('tarikh_4')->nullable();
            $table->date('tarikh_5')->nullable();
            $table->integer('id_daerah');
            $table->integer('id_mukim');
            $table->integer('id_lot');
            $table->integer('id_blok');
            $table->string('id_staff');
            $table->integer('id_status');
            $table->integer('bil_pemilik');
            $table->float('luas_ambil',8,4);
            $table->float('harga_tanah',8,2);
            $table->integer('wakil_mada');
            $table->integer('wakil_jps');
            $table->string('bilangan');
            $table->float('pampasan',8,2);
            $table->float('kos_lain',8,2);
            $table->string('catatan')->nullable();
            $table->string('jajaran')->nullable();
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
