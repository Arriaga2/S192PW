<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Clientes')->insert([
            [
               'nombre'=>'Ivan',
               'apellido'=>'Guerra',
               'correo'=>'Guerra@gmail.com',
               'telefono'=>'1234567891',

            ],
            [
                'nombre'=>'Juan',
                'apellido'=>'Perez',
                'correo'=>'Perez@gmail.com',
                'telefono'=>'1234567892',

            ],
            [
                'nombre'=>'Maria',
                'apellido'=>'Rodriguez',
                'correo'=>'Rodriguez@gmail.com',
                'telefono'=>'1234567893',
            ]]);
    }
}
