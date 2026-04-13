<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPresensickpToPenilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penilais', function (Blueprint $table) {
            $table->integer('absensi')->nullable()->after('penilai3');
            $table->integer('ckp')->nullable()->after('absensi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penilais', function (Blueprint $table) {
            //
        });
    }
}
