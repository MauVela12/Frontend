<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        Usuario::create([
            'nombre' => 'Nombre',
            'correo' => 'correo@example.com',
            'password' => 'hola', 
            'tipo' => 'administrador',
        ]);

        Usuario::create([
            'nombre' => 'Empleado',
            'correo' => 'empleado@example.com',
            'password' => 'hola',
            'tipo' => 'empleado',
        ]);
    }
}
