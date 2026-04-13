<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeleksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seleksis', function (Blueprint $table) {
            $table->id();
            $table->string('indikator');
            $table->string('deskripsi1');
            $table->string('deskripsi2');
            $table->string('deskripsi3');
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
        Schema::dropIfExists('seleksis');
    }
}
