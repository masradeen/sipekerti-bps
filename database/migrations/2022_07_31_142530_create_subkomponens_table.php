<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubkomponensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subkomponens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('komponen_id');
            $table->timestamps();
            $table->foreign('komponen_id')->references('id')->on('komponens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subkomponens');
    }
}
