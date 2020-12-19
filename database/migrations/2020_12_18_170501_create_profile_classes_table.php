<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->integer('wali_kelas')->unsigned();
            $table->integer('ketua_kelas')->unsigned();
            $table->integer('wakil_ketua_kelas')->unsigned();
            $table->integer('sekertaris_kelas')->unsigned();
            $table->integer('sekertaris_kelas_2')->nullable()->unsigned();
            $table->integer('bendahara_kelas')->unsigned();
            $table->integer('bendahara_kelas_2')->nullable()->unsigned();
            $table->bigInteger('total_khas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_classes');
    }
}
