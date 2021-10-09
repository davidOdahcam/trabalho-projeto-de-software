<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_arpt', function (Blueprint $table) {
            $table->string('cd_arpt', 3);
            $table->string('cd_pais', 2);
            $table->string('sg_uf', 2);
            $table->string('nm_cidd', 30);

            $table->primary('cd_arpt');
            $table->foreign('cd_pais')->references('cd_pais')->on('itr_pais');
            $table->foreign('sg_uf')->references('sg_uf')->on('itr_uf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_arpt');
    }
}
