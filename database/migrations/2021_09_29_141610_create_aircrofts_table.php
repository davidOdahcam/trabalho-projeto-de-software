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
            $table->string('cd_arnv', 5);
            $table->string('cd_eqpt', 3);
            $table->string('cd_cmpn_aerea', 2);

            $table->primary('cd_arnv');
            $table->foreign('cd_eqpt')->references('cd_eqpt')->on('itr_eqpt')->onDelete('restrict');
            $table->foreign('cd_cmpn_aerea')->references('cd_cmpn_aerea')->on('itr_cmpn_aerea')->onDelete('restrict');
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
