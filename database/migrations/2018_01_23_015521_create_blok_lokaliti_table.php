<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlokLokalitiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blok_lokaliti',function(Blueprint $table){
            $table->integer('id_blok')->unsigned();
            $table->foreign('id_blok')->references('id')->on('blok')->onDelete('cascade');

            $table->integer('id_lokaliti')->unsigned();
            $table->foreign('id_lokaliti')->references('id')->on('lokaliti')->onDelete('cascade');
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
