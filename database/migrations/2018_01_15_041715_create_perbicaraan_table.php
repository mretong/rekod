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
            $table->integer('id_lot');
            $table->integer('id_blok');
            $table->string('no_pekerja');
            $table->integer('status');
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
