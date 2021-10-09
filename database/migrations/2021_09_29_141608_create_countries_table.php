<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_pais', function (Blueprint $table) {
            $table->string('cd_pais', 2);
            $table->string('nm_pais', 25);
            $table->decimal('qt_pplc_pais', 10, 0)->nullable();

            $table->primary('cd_pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_pais');
    }
}
