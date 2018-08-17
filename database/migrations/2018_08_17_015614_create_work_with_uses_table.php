<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkWithUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_withuses', function (Blueprint $table) {
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
            $table->string('trabajar_como');
            
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
        Schema::dropIfExists('work_with_uses');
    }
}
