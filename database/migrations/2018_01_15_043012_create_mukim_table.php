<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMukimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mukim', function (Blueprint $table) {
            $table->increments('id')
                    ->unsigned();
            $table->integer('id_blok');
            $table->foreign('id_blok')
                    ->references('id')
                    ->on('blok')
                    ->onDelete('cascade');
                    
            $table->string('nama');
            $table->string('no_geran');
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
