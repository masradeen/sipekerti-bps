<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variabels', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('insert_by');
            $table->timestamps();
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->foreign('insert_by')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variabels');
    }
}
