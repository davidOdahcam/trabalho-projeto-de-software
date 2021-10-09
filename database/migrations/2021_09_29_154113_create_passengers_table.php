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
            $table->decimal('cd_psgr', 4, 0);
            $table->string('nm_psgr', 30);
            $table->string('ic_sexo_psgr', 1);
            $table->date('dt_nasc_psgr');
            $table->string('cd_pais', 2);
            $table->string('ic_estd_civil', 1);
            $table->decimal('cd_psgr_resp', 4, 0); // Auto Relacionamento

            $table->primary('cd_psgr');
            $table->foreign('cd_pais')->references('cd_pais')->on('itr_pais');
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
