<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function login(){
    //     return view('login');
    // }
    
    
    public function login(Request $request)
    {
        $credentials = $request->only('correo', 'password');
    
        // Intentar autenticar
        $user = Usuario::where('correo', $credentials['correo'])
                       ->where('password', $credentials['password'])
                       ->first();
    
        if ($user) {
            Auth::login($user);
    
            // Redirigir basado en el tipo de usuario
            if ($user->tipo === 'administrador') {
                return redirect()->route('admin.inicio');
            } elseif ($user->tipo === 'empleado') {
                return redirect()->route('empleado.inicio');
            }
        }
    
        // Si la autenticación falla, redirigir de vuelta con un error
        return redirect()->back()->withErrors(['error' => 'Correo o contraseña incorrecto']);
    }
}
