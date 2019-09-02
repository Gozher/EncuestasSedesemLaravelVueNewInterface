<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');        
            $table->integer('fk_pregunta')->unsigned();                                 
            $table->string('respuesta'); 
            $table->integer('status')->unsigned();                        
            $table->timestamps();        
            $table->foreign('fk_pregunta')->references('id')->on('preguntas'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
