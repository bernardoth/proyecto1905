<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=> 'Bernardo',
            'apellidopaterno'=>'Choque',
            'apellidomaterno'=>'Miranda',
            'carnet'=>'4787834lp',
            'celular'=>'68121594',

            'cargo'=>'ADMIN',
            'email'=>'daidamon.theos@gmail.com',
            'password'=>bcrypt('Bernardo1905'),
            'direccion'=>"23 de Marzo #1042"

        ]);
    }
}
