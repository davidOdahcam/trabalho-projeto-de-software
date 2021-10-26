<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_rota_voo', function (Blueprint $table) {
            $table->decimal('nr_rota_voo', 3, 0);
            $table->string('cd_arpt_orig', 3);
            $table->string('cd_arpt_dest', 3);
            $table->decimal('vr_pasg', 8, 2)->nullable();

            $table->primary('nr_rota_voo');
            $table->foreign('cd_arpt_orig')->references('cd_arpt')->on('itr_arpt');
            $table->foreign('cd_arpt_dest')->references('cd_arpt')->on('itr_arpt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_rota_voo');
    }
}
