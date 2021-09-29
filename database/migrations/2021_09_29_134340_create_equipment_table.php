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
            $table->id('cd_eqpt');
            $table->string('nm_eqpt');
            $table->text('dc_tipo_eqpt');
            $table->integer('qt_eqpt');
            $table->boolean('ic_tipo_prps');
            $table->integer('qt_psgr');
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
