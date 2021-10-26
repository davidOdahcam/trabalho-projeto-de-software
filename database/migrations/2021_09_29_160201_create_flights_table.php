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
            $table->decimal('nr_voo', 3, 0);
            $table->date('dt_saida_voo');
            $table->decimal('nr_rota_voo', 3, 0);
            $table->string('cd_arnv', 5);

            $table->primary(['nr_voo', 'dt_saida_voo']);
            $table->foreign('nr_rota_voo')->references('nr_rota_voo')->on('itr_rota_voo');
            $table->foreign('cd_arnv')->references('cd_arnv')->on('itr_arnv');
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
