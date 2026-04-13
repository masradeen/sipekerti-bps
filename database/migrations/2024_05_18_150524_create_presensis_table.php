<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->tinyInteger('hk');
            $table->tinyInteger('hd');
            $table->tinyInteger('tk');
            $table->tinyInteger('tl');
            $table->tinyInteger('tb');
            $table->tinyInteger('pd');
            $table->tinyInteger('dk');
            $table->tinyInteger('kn');
            $table->tinyInteger('psw');
            $table->tinyInteger('psw1');
            $table->tinyInteger('psw2');
            $table->tinyInteger('psw3');
            $table->tinyInteger('psw4');
            $table->tinyInteger('ht');
            $table->tinyInteger('tl1');
            $table->tinyInteger('tl2');
            $table->tinyInteger('tl3');
            $table->tinyInteger('tl4');
            $table->tinyInteger('cb');
            $table->tinyInteger('cl');
            $table->tinyInteger('cm');
            $table->tinyInteger('cp');
            $table->tinyInteger('cs');
            $table->tinyInteger('ct10');
            $table->tinyInteger('ct11');
            $table->tinyInteger('ct12');
            $table->tinyInteger('cst1');
            $table->tinyInteger('cst2');
            $table->smallInteger('kjk_ht');
            $table->smallInteger('kjk_pc');
            $table->smallInteger('kjk');
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
        Schema::dropIfExists('presensis');
    }
}
