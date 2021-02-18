<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileAttributeTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('file_attribute_tugas');
        Schema::create('file_attribute_tugas', function (Blueprint $table) {
            $table->id();
            $table->integer('tugas_id')->unsigned();
            $table->string('file', 255);
            $table->string('extendsion', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_attribute_tugas');
    }
}
