<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_voo', function (Blueprint $table) {
            $table->unsignedBigInteger('nr_voo');
            $table->datetime('dt_saida_voo');
            $table->string('nr_rota_voo');
            $table->unsignedBigInteger('cd_arnv');
            $table->primary(['nr_voo', 'dt_saida_voo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_voo');
    }
}
