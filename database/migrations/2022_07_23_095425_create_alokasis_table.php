<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlokasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alokasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('box_id');
            $table->string('kode_prov');
            $table->string('kode_kab');
            $table->string('kode_kec');
            $table->string('kode_desa');
            $table->string('nbs');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('box_id')->references('id')->on('boxes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alokasis');
    }
}
