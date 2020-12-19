<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('profile_siswa');
        Schema::create('profile_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->bigInteger('nisn')->nullable();
            $table->tinyInteger('no_absen');
            $table->integer('peran_id')->unsigned();
            $table->string('avatar');
            $table->string('gender', 16)->default('male');
            $table->bigInteger('no_hp')->nullable();
            $table->bigInteger('no_hp_wali')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_siswa');
    }
}
