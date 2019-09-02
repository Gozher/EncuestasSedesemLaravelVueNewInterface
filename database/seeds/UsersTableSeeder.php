<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            array(                                

                [ 'name'=> 'Alberto',
                    'municipio'=> 'ACAMBAY',
                    'email'=> 'alberto@example.com',
                    'password'=> bcrypt('123456')
                ],

                [ 'name'=> 'Alan',
                    'municipio'=> 'ACULCO',
                    'email'=> 'alan@example.com',
                    'password'=> bcrypt('123456')
                ]
            )           
        );
    }
}
