<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Emiliano',
                'apellido'=>'Perez',
                'correo'=>'emiliano@gmail.com',
                'telefono'=>'4426141814'
            ],
            [
                'nombre'=>'Sebastian',
                'apellido'=>'Ramirez',
                'correo'=>'cbas@gmail.com',
                'telefono'=>'4423545424'
            ],
            [
                'nombre'=>'Andrea',
                'apellido'=>'Medina',
                'correo'=>'andy@gmail.com',
                'telefono'=>'4426785454'
            ]
        ]);
    }
}
