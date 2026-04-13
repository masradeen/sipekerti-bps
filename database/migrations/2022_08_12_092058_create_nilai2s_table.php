<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilai2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai2s', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('bulan');
            $table->unsignedBigInteger('pegawai_id');
            $table->unsignedBigInteger('nilai1')->nullable();
            $table->unsignedBigInteger('nilai2')->nullable();
            $table->unsignedBigInteger('nilai3')->nullable();
            $table->unsignedBigInteger('nilai4')->nullable();
            $table->unsignedBigInteger('nilai5')->nullable();
            $table->unsignedBigInteger('nilai6')->nullable();
            $table->unsignedBigInteger('nilai7')->nullable();
            $table->unsignedBigInteger('nilai8')->nullable();
            $table->unsignedBigInteger('nilai9')->nullable();
            $table->unsignedBigInteger('nilai10')->nullable();
            $table->unsignedBigInteger('nilai11')->nullable();
            $table->unsignedBigInteger('nilai12')->nullable();
            $table->unsignedBigInteger('nilai13')->nullable();
            $table->unsignedBigInteger('nilai14')->nullable();
            $table->unsignedBigInteger('nilai15')->nullable();
            $table->unsignedBigInteger('nilai16')->nullable();
            $table->unsignedBigInteger('nilai17')->nullable();
            $table->unsignedBigInteger('nilai18')->nullable();
            $table->unsignedBigInteger('nilai19')->nullable();
            $table->unsignedBigInteger('nilai20')->nullable();
            $table->unsignedBigInteger('nilai21')->nullable();
            $table->unsignedBigInteger('nilai22')->nullable();
            $table->unsignedBigInteger('nilai23')->nullable();
            $table->unsignedBigInteger('nilai24')->nullable();
            $table->unsignedBigInteger('nilai25')->nullable();
            $table->unsignedBigInteger('nilai26')->nullable();
            $table->unsignedBigInteger('nilai27')->nullable();
            $table->unsignedBigInteger('nilai28')->nullable();
            $table->unsignedBigInteger('nilai29')->nullable();
            $table->unsignedBigInteger('nilai30')->nullable();
            $table->unsignedBigInteger('nilai31')->nullable();
            $table->unsignedBigInteger('nilai32')->nullable();
            $table->unsignedBigInteger('nilai33')->nullable();
            $table->unsignedBigInteger('nilai34')->nullable();
            $table->unsignedBigInteger('nilai35')->nullable();
            $table->unsignedBigInteger('nilai36')->nullable();
            $table->unsignedBigInteger('nilai37')->nullable();
            $table->unsignedBigInteger('nilai38')->nullable();
            $table->unsignedBigInteger('nilai39')->nullable();
            $table->unsignedBigInteger('nilai40')->nullable();
            $table->unsignedBigInteger('nilai41')->nullable();
            $table->unsignedBigInteger('nilai42')->nullable();
            $table->unsignedBigInteger('nilai43')->nullable();
            $table->unsignedBigInteger('nilai44')->nullable();
            $table->unsignedBigInteger('nilai45')->nullable();
            $table->unsignedBigInteger('total')->nullable();
            $table->unsignedBigInteger('absensi')->nullable();
            $table->unsignedBigInteger('ckp')->nullable();
            $table->integer('is_final')->nullable();
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
        Schema::dropIfExists('nilai2s');
    }
}
