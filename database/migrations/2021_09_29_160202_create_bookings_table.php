<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_resv', function (Blueprint $table) {
            $table->decimal('cd_psgr', 4, 0);
            $table->decimal('nr_voo', 3, 0);
            $table->date('dt_saida_voo');
            $table->decimal('pc_desc_pasg', 5, 2)->nullable();

            $table->primary(['cd_psgr', 'nr_voo', 'dt_saida_voo']);
            $table->foreign('cd_psgr')->references('cd_psgr')->on('itr_psgr');
            $table->foreign(['nr_voo', 'dt_saida_voo'])->references(['nr_voo', 'dt_saida_voo'])->on('itr_voo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
