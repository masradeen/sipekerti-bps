<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('bulan');
            $table->unsignedBigInteger('pegawai_id');
            $table->unsignedBigInteger('penilai1')->nullable();
            $table->unsignedBigInteger('penilai2')->nullable();
            $table->unsignedBigInteger('penilai3')->nullable();
            $table->unsignedBigInteger('insert_by')->default(1);
            $table->timestamps();
            $table->foreign('pegawai_id')->references('id')->on('pegawais');
            $table->foreign('penilai1')->references('id')->on('pegawais');
            $table->foreign('penilai2')->references('id')->on('pegawais');
            $table->foreign('penilai3')->references('id')->on('pegawais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilais');
    }
}
