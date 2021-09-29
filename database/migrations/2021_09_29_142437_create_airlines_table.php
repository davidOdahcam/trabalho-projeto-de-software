<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_cmpn_aerea', function (Blueprint $table) {
            $table->id('cd_cmpn_aerea');
            $table->string('nm_cmpn_aerea');
            $table->unsignedBigInteger('cd_pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_cmpn_aerea');
    }
}
