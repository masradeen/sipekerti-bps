<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilai1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai1s', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('bulan');
            $table->unsignedBigInteger('pegawai_id');
            $table->unsignedBigInteger('nilai1');
            $table->unsignedBigInteger('nilai2');
            $table->unsignedBigInteger('nilai3');
            $table->unsignedBigInteger('nilai4');
            $table->unsignedBigInteger('nilai5');
            $table->unsignedBigInteger('nilai6');
            $table->unsignedBigInteger('nilai7');
            $table->unsignedBigInteger('total');
            $table->integer('is_final');
            $table->integer('is_calon');
            $table->unsignedBigInteger('insert_by');
            $table->timestamps();
            $table->foreign('insert_by')->references('id')->on('users');
            $table->foreign('pegawai_id')->references('id')->on('pegawais');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai1s');
    }
}
