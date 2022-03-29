<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_estudiante');
            $table->string('ape_estudiante');
            $table->string('direccion');
            $table->BigInteger('telefono')->nullable();
            $table->string('tipo_de_doc');
            $table->BigInteger('num_documento');
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
        Schema::dropIfExists('_estudiantes');
    }
}
