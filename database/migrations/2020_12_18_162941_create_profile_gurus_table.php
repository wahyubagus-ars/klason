<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_guru', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->bigInteger('nip');
            $table->bigInteger('no_hp');
            $table->string('avatar')->nullable();
            $table->string('gender', 16)->default('male');
            $table->integer('jabatan_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_guru');
    }
}
