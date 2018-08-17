<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_beneficiario');
            $table->string('cedula_beneficiario');
            $table->string('apellido_beneficiario');
            $table->string('edad_beneficiario');
            $table->string('parentesco');

            $table->integer('afiliado_id')->unsigned();
            $table->foreign('afiliado_id')->references('id')->on('afiliados')->onDelete('cascade');
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
        Schema::dropIfExists('beneficiarios');
    }
}
