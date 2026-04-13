<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterpretasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interpretasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('variabel_id');
            $table->string('interpretasi');
            $table->unsignedBigInteger('insert_by');
            $table->timestamps();
            $table->foreign('insert_by')->references('id')->on('users');
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
        Schema::dropIfExists('interpretasis');
    }
}
