<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotPemilikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot_pemilik', function (Blueprint $table) {
            $table->integer('id_lot');
            $table->integer('id_pemilik');
            $table->string('no_hakmilik');
            $table->integer('status_hakmilik');
            $table->string('pecahan_bahagian');
            $table->float('nilai_tanah',8,2);
            $table->float('luas_pengambilan',8,4);
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
