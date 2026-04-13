<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJabatanToPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pegawais', function (Blueprint $table) {
            $table->unsignedBigInteger('jabatan_id')->default('1')->after('nama');
            $table->foreign('jabatan_id')->references('id')->on('jabatans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pegawais', function (Blueprint $table) {
            //
        });
    }
}
