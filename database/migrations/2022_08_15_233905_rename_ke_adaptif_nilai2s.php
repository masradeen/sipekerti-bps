<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameKeAdaptifNilai2s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai2s', function (Blueprint $table) {
            $table->renameColumn('nilai43', 'adaptif');
            $table->renameColumn('nilai44', 'kolaboratif');
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
