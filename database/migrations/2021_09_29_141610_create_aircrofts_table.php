<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAircroftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_arnv', function (Blueprint $table) {
            $table->id('cd_arnv');
            $table->unsignedBigInteger('cd_eqpt');
            $table->unsignedBigInteger('cd_cmpn_aerea');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_arnv');
    }
}
