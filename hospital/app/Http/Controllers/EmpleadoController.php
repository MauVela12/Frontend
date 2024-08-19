<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function inicio(){
        return view('empleado');
    }

    public function crear(){
        return view('citCrear');
    }

    public function pendiente(){
        return view('citPendiente');
    }

    public function modificar(){
        return view('citModificar');
    }

    public function estado(){
        return view('citEstado');
    }
}
