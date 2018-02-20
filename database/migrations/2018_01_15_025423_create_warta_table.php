<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWartaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_blok');
            $table->integer('id_fasa');
            $table->integer('id_pakej');
            $table->date('tarikh_warta');
            $table->date('tarikh_luput');
            $table->string('jilid_warta');
            $table->integer('no_warta');
            $table->string('rujukan')->nullable();
            $table->string('catatan')->nullable();
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
