<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itr_eqpt', function (Blueprint $table) {
            $table->string('cd_eqpt', 3);
            $table->string('nm_eqpt', 38);
            $table->string('dc_tipo_eqpt', 13);
            $table->decimal('qt_motor', 1, 0)->nullable();
            $table->string('ic_tipo_prps', 1)->nullable();
            $table->decimal('qt_psgr', 3, 0)->nullable();

            $table->primary('cd_eqpt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itr_eqpt');
    }
}
