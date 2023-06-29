<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'usuario' => 'juan lopez',
            'correo_electronico' => 'prueba0@gmail.com',
            'tipo_usuario' => 'Cliente',
            'contraseña' =>bcrypt('1234'),
        ]);
        DB::table('usuarios')->insert([
            'usuario' => 'pedro lopez',
            'correo_electronico' => 'prueba1@gmail.com',
            'tipo_usuario' => 'Administrador',
            'contraseña' =>bcrypt('1234'),
        ]);
    }
}
