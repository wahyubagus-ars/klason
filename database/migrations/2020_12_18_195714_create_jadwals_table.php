<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('jadwal');
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('hari', 24);
            $table->integer('mapel_id')->unsigned();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('until_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
