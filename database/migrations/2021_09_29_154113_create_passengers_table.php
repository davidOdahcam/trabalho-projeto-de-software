<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_psgr', function (Blueprint $table) {
            $table->bigInteger('cd_psgr', true);
            $table->string('nm_psgr', 30);
            $table->string('ic_sexo_psgr', 1)->nullable();
            $table->date('dt_nasc_psgr')->nullable();
            $table->string('cd_pais', 2)->nullable();
            $table->string('ic_estd_civil', 1);
            $table->bigInteger('cd_psgr_resp')->nullable();

            $table->foreign('cd_pais')->references('cd_pais')->on('itr_pais');
            $table->foreign('cd_psgr_resp')->references('cd_psgr')->on('itr_psgr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_psgr');
    }
}
