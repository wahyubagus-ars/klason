<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailAktivitasDanaKhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_aktivitas_dana_khas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->integer('jumlah')->unsigned()->nullable();
            $table->bigInteger('harga')->unsigned()->nullable();
            $table->bigInteger('total')->unsigned()->nullable();
            $table->integer('aktivitas_khas_id')->unsigned();
            $table->date('dibuat');
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
        Schema::dropIfExists('detail_aktivitas_dana_khas');
    }
}
