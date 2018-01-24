<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlokMukimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blok_mukim', function (Blueprint $table) {
            $table->integer('id_blok')->unsigned();
            $table->foreign('id_blok')->references('id')->on('blok')->onDelete('cascade');
            
            $table->integer('id_mukim')->unsigned();
            $table->foreign('id_mukim')->references('id')->on('mukim')->onDelete('cascade');
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
