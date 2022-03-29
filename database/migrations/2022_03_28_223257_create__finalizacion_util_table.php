<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_finalizacion_util', function (Blueprint $table) {
                $table->id();
                $table->string('avances');
                $table->date('fecha_avance');
                $table->decimal('precio')->nullable();
                $table->unsignedBigInteger('proyecto_id');
                $table->foreign('proyecto_id')->references('id')->on('_proyecto');
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
        Schema::dropIfExists('_finalizacion_util');
    }
};
