<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameKeLoyalNilai2s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai2s', function (Blueprint $table) {
            $table->renameColumn('nilai38', 'bplayan');
            $table->renameColumn('nilai39', 'akuntabel');
            $table->renameColumn('nilai40', 'kompeten');
            $table->renameColumn('nilai41', 'harmonis');
            $table->renameColumn('nilai42', 'loyal');
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
