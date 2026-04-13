<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPenilaiIdToNilai2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai2s', function (Blueprint $table) {
            $table->unsignedBigInteger('penilai_id')->after('pegawai_id');
            // $table->foreign('penilai_id')->references('id')->on('penilais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nilai2s', function (Blueprint $table) {
            //
        });
    }
}
