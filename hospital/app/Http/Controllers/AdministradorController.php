<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Models\Paciente;
use App\Models\Medicamento;


use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    // -------------------------------------------------------
    public function administradores(){
        return view('admAdministradores');
    }

    public function agregar(){
        return view('admAgregar');
    }

    public function salvar(Request $request){
        $nvoUsuario = new Usuario();
        $nvoUsuario->nombre = $request->nombre;
        $nvoUsuario->correo = $request->correo;
        $nvoUsuario->password = $request->password;
        $nvoUsuario->tipo =$request->tipo;
        $nvoUsuario->save();

        return redirect('/administrador/administradores/lista');
    }

    public function eliminar(){
        return view('admEliminar');
    }

    public function destroy(Request $request)
    {
        $idusuario = $request->input('idusuario');
    
        // Buscar al usuario por idusuario y eliminarlo
        $usuario = Usuario::where('idusuario', $idusuario)->first();
    
        if ($usuario) {
            $usuario->delete();
            return redirect('/administrador/administradores/lista')->with('success', 'Usuario eliminado correctamente.');
        } else {
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }
    }
    
    // public function lista(){
    //     return view('admLista');
    // }

    public function lista(){
        $usuarios = Usuario::all();
        return view('admLista', compact('usuarios'));
    }

    // -------------------------------------------------------
    public function personal(){
        return view('admPersonal');
    }

    public function contratar(){
        return view('perContratar');
    }

    public function despedir(){
        return view('perDespedir');
    }

    public function listaP(){
        return view('perBuscar');
    }

    public function horario(){
        return view('perHorario');
    }

    // -------------------------------------------------------
    public function pacientes(){
        return view('admPacientes');
    }

    public function crear(){
        return view('pacCrear');
    }

    public function salvarP(Request $request){
        $nvoPaciente = new Paciente();
        $nvoPaciente->nombre = $request->nombre;
        $nvoPaciente->apellido = $request->apellido;
        $nvoPaciente->fechanacimiento = $request->fechanacimiento;
        $nvoPaciente->direccion =$request->direccion;
        $nvoPaciente->telefono =$request->telefono;
        $nvoPaciente->correo =$request->correo;
        $nvoPaciente->save();

        return redirect('/administrador/pacientes/expedientes');
    }

    public function historial(){
        return view('pacHistorial');
    }

    // public function citas(){
    //     return view('pacCitas');
    // }

    public function citas(){
        $pacientes = Paciente::all();
        return view('pacCitas', compact('pacientes'));
    }
    
    // -------------------------------------------------------
    public function farmacia(){
        return view('admFarmacia');
    }

    // public function listaF(){
    //     return view('farLista');
    // }

    public function listaF(){
        $medicamentos = Medicamento::all();
        return view('farLista', compact('medicamentos'));
    }



    // public function cantidad(){
    //     return view('farBuscar');
    // }

    public function crearF(){
        return view('farCrear');
    }

    public function salvarF(Request $request){
        $nvoMedicamento = new Medicamento();
        $nvoMedicamento->nombre = $request->nombre;
        $nvoMedicamento->descripcion = $request->descripcion;
        $nvoMedicamento->cantidad = $request->cantidad;
        $nvoMedicamento->fechacaducidad =$request->fechacaducidad;
        $nvoMedicamento->save();

        return redirect('/administrador/farmacia/lista');
    }

    // public function editarC(){
    //     $medicamentoEditar = Medicamento::find();
    //     return view('farBuscar', compact('medicamentoEditar'));
    // }

    public function cantidad(){
        $medicamentos = Medicamento::all();
        return view('farBuscar', compact('medicamentos'));
    }

    public function salvarEditar(Request $request){
        $ids = $request->input('idmedicamento');
        $cantidades = $request->input('cantidad');
    
        foreach ($ids as $index => $id) {
            $medicamento = Medicamento::find($id);
    
            if ($medicamento) {
                $cantidadActual = $medicamento->cantidad;
                $cantidadNueva = $cantidades[$index];
    
                // Solo permitir incrementar la cantidad
                if ($cantidadNueva >= $cantidadActual) {
                    $medicamento->cantidad = $cantidadNueva;
                    $medicamento->save();
                } else {
                    return redirect()->back()->withErrors('La cantidad no puede ser menor que la actual para el medicamento ID ' . $id);
                }
            }
        }
    
        return redirect('/administrador/farmacia/lista')->with('success', 'Cantidades actualizadas correctamente.');
    }
    
    
    

}
