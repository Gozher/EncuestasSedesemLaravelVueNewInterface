<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuestrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muestras', function (Blueprint $table) {
            $table->increments('id');   
            $table->string('FolioRel');
            $table->string('Municipio');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('Nombre');
            $table->string('genero');
            $table->string('localidad');
            $table->string('colonia');
            $table->string('calle');
            $table->string('NumInt');
            $table->string('NumExt');
            $table->string('otraRef');
            $table->string('Telefono');
            $table->string('Celular');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('muestras');
    }
}
