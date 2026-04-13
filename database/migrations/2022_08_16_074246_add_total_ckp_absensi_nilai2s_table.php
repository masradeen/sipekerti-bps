<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalCkpAbsensiNilai2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai2s', function (Blueprint $table) {
            $table->decimal('40total')->nullable()->after('ckp');
            $table->decimal('40ckp')->nullable()->after('40total');
            $table->decimal('20absensi')->nullable()->after('40ckp');
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
