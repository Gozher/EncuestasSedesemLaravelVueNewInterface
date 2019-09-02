<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('id');                    
            $table->integer('fk_beneficiario')->unsigned();  
            $table->integer('fk_pregunta')->unsigned();  
            $table->integer('fk_respuesta')->unsigned(); 
            $table->timestamps();
            $table->foreign('fk_beneficiario')->references('id')->on('muestras'); 
            $table->foreign('fk_pregunta')->references('id')->on('preguntas'); 
            $table->foreign('fk_respuesta')->references('id')->on('respuestas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuestas');
    }
}
