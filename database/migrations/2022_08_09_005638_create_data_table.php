<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('variabel_id');
            $table->integer('data');
            $table->integer('tahun');
            $table->unsignedBigInteger('insert_by');
            $table->foreign('insert_by')->references('id')->on('users');
            $table->timestamps();
            $table->foreign('variabel_id')->references('id')->on('variabels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
