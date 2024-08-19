<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use App\Models\Usuario;


class LoginController extends Controller
{

    public function login(Request $request)
    {
        $correo = $request->input('correo');
        $password = $request->input('password');

    try {
        $client = new Client();

            $response = $client->get('localhost:8080/api/usuarios/obtenerusuarioPorCorreoContrasena/'.$correo.'/'.$password);
            
            $body = json_decode($response->getBody()->getContents());
            $user = $body;

        if ($user) {

            // Redirigir basado en el tipo de usuario
            if ($user->tipo === "administrador") {
                return view('administrador');

            } elseif ($user->tipo === "empleado") {
                return view('empleado');
            }
        }
    
        // Si la autenticación falla, redirigir de vuelta con un error
        return redirect()->back()->withErrors(['error' => 'Correo o contraseña incorrecto']);
    } catch (RequestException $e) {
        return response()->json(['mensaje' => 'Error al enviar la solicitud a la API externa'], 500);
    }
}
}
