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
            $table->date('tarikh_2');
            $table->date('tarikh_3');
            $table->date('tarikh_4');
            $table->date('tarikh_5');
            $table->integer('id_lot');
            $table->string('nama_pentadbir');
            $table->integer('status');
            $table->string('bilangan');
            $table->float('pampasan',8,2);
            $table->float('kos_lain',8,2);
            $table->string('catatan');
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
