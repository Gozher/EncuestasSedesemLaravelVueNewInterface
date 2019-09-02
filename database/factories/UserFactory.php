<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Muestra::class, function (Faker $faker) {
    return [
        'ApellidoPaterno' => $faker->lastname,
        'ApellidoMaterno' => $faker->lastname,
        'Nombre'          => $faker->name,  
        'genero'          => $faker->randomElement(['M','H']),
        'localidad'       => 'Localidad',  
        'colonia'         => 'Colonia',  
        'calle'           => 'Calle',  
        'NumInt'          => $faker->randomElement(['1','2','3','4','5','6']),
        'NumExt'          => $faker->randomElement(['1','2','3','4','5','6']), 
        'otraRef'         => $faker->sentence,  
        'Telefono'        => '1234567890',  
        'status' 		  => '0', 
        
    ];
});
