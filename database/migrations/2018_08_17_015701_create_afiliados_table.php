<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('identification');
            $table->integer('age');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('phone');
            $table->string('cellphone');
            $table->string('email');
            $table->string('profession');
            $table->string('expeciality');
            $table->string('empresa');
            $table->string('caja_compensacion');
            $table->string('eps_actual');
            $table->string('arl_actual');
            $table->string('afp_actual');
            $table->string('tipo_afiliacion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
}
