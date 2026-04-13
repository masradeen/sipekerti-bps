<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSektoralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sektorals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instansi_id');
            $table->string('kegiatan');
            $table->date('waktu')->nullable();
            $table->text('progress');
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('instansi_id')->references('id')->on('instansis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sektorals');
    }
}
