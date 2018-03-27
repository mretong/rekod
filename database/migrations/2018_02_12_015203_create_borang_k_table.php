<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorangKTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borang_k', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_blok');
            $table->integer('id_lot');
            $table->date('tarikh_k');
            $table->date('tarikh_terima');
            $table->string('rujukan_jkptg');
            $table->string('rujukan_jps');
            $table->string('rujukan_k');
            $table->string('rujukan_fail');
            $table->string('attachment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borang_k');
    }
}
