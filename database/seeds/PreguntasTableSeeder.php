<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('preguntas')->insert(
            array(

                [ 'pregunta' => '¿Ubico al beneficiario?','status' => 1],
                [ 'pregunta' => '¿Si no lo ubico razón?','status' => 1,],
                [ 'pregunta' => '¿A que programa pertenecen?','status' => 1,],
                [ 'pregunta' => '¿Sabes que autoridad te  brinda el apoyo?','status' => 1,],
                [ 'pregunta' => '¿Que recomiendas para mejorar la atencion ?','status' => 1,]
            )           
         );
    }
}
