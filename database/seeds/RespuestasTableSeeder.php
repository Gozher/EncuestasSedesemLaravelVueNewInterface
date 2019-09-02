<?php

use Illuminate\Database\Seeder;

class RespuestasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('respuestas')->insert(
            array(

                [ 'fk_pregunta'=>'1', 'respuesta' => 'Si','status' => 1],
                [ 'fk_pregunta'=>'1','respuesta' => 'No','status' => 1,],

                [ 'fk_pregunta'=>'2','respuesta' => 'Vive pero no estaba', 'status' => 1,],
                [ 'fk_pregunta'=>'2','respuesta' => 'cambío de domicilio', 'status' => 1,],
                [ 'fk_pregunta'=>'2','respuesta' => 'No ha vivido ahí',    'status' => 1,],
                [ 'fk_pregunta'=>'2','respuesta' => 'No lo conoce',        'status' => 1,],

                [ 'fk_pregunta'=>'3','respuesta' => 'Niñes indigena',          'status' => 1,],
                [ 'fk_pregunta'=>'3','respuesta' => 'Salario rosa',            'status' => 1,],
                [ 'fk_pregunta'=>'3','respuesta' => 'Alimentacion Mexiquense', 'status' => 1,],
                [ 'fk_pregunta'=>'3','respuesta' => 'jovenes en movimiento',   'status' => 1,],
                [ 'fk_pregunta'=>'3','respuesta' => 'Adultos mayores',         'status' => 1,],
                [ 'fk_pregunta'=>'3','respuesta' => 'Otro',                    'status' => 1,],

                [ 'fk_pregunta'=>'4','respuesta' => 'Presidente municipal', 'status' => 1,],
                [ 'fk_pregunta'=>'4','respuesta' => 'Gobernador', 'status' => 1,],
                [ 'fk_pregunta'=>'4','respuesta' => 'Presidente de la republica', 'status' => 1,],
                [ 'fk_pregunta'=>'4','respuesta' => 'No lo sabe', 'status' => 1,],

                [ 'fk_pregunta'=>'5','respuesta' => 'Mejor trato', 'status' => 1,],
                [ 'fk_pregunta'=>'5','respuesta' => 'Mayor cercania', 'status' => 1,],
                [ 'fk_pregunta'=>'5','respuesta' => 'Mayor rapidez', 'status' => 1,],
                [ 'fk_pregunta'=>'5','respuesta' => 'Otro', 'status' => 1,]

            )           
         );
    }
}
