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
            $table->id('cd_psgr');
            $table->string('nm_psgr');
            $table->string('ic_sexo_psgr');
            $table->date('dt_nasc_psgr');
            $table->unsignedBigInteger('cd_pais');
            $table->string('ic_estd_civil');
            $table->string('cd_psgr_resp'); // Auto Relacionamento
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
