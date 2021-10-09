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
            $table->string('cd_cmpn_aerea', 2);
            $table->string('nm_cmpn_aerea', 22);
            $table->string('cd_pais', 2)->nullable()->default(null);

            $table->primary('cd_cmpn_aerea');
            $table->foreign('cd_pais')->references('cd_pais')->on('itr_pais')->onDelete('restrict');
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
