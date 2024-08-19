<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/login', [LoginController :: class, 'login'])->name('login');

// Route::get('/administrador', [AdministradorController :: class, 'inicio'])->name('inicio.administrador');

// Route::get('/empleado', [EmpleadoController :: class, 'inicio'])->name('inicio.empleado');


use App\Http\Controllers\AuthController;

Route::get('/login', function () {
    return view('login'); // Vista del formulario de login
})->name('login');


Route::post('/login', [LoginController::class, 'login'])->name('login.inicio');

Route::get('/administrador', function () {
    return view('administrador'); // Vista del panel de administración
})->name('admin.inicio')->middleware('auth');

Route::get('/empleado', function () {
    return view('empleado'); // Vista del panel de empleado
})->name('empleado.inicio')->middleware('auth');


//Administrador
Route::get('/administrador/administradores', [AdministradorController :: class, 'administradores'])->name('administradores');
Route::get('/administrador/administradores/agregar', [AdministradorController :: class, 'agregar'])->name('administradores.agregar');
Route::post('/usuario/salvar', [AdministradorController::class, 'salvar'])->name('usuario.salvar');
Route::get('/administrador/administradores/eliminar', [AdministradorController :: class, 'eliminar'])->name('administradores.eliminar');
Route::delete('/usuarios', [AdministradorController::class, 'destroy'])->name('usuarios.destroy');
Route::get('/administrador/administradores/lista', [AdministradorController :: class, 'lista'])->name('administradores.lista');
//----------------------------------------------------------------------------------------------------------------
Route::get('/administrador/personal', [AdministradorController :: class, 'personal'])->name('personal');
Route::get('/administrador/personal/contratar', [AdministradorController :: class, 'contratar'])->name('personal.contratar');
Route::post('/usuario/salvar', [AdministradorController::class, 'salvar'])->name('usuario.salvar');
Route::get('/administrador/personal/despedir', [AdministradorController :: class, 'despedir'])->name('personal.despedir');
Route::delete('/usuarios', [AdministradorController::class, 'destroy'])->name('usuarios.destroy');
Route::get('/administrador/personal/lista', [AdministradorController :: class, 'listaP'])->name('personal.lista');
Route::get('/administrador/personal/horario', [AdministradorController :: class, 'horario'])->name('personal.horario');
//-----------------------------------------------------------------------------------------------------------------
Route::get('/administrador/pacientes', [AdministradorController :: class, 'pacientes'])->name('pacientes');
Route::get('/administrador/pacientes/crear', [AdministradorController :: class, 'crear'])->name('pacientes.crear');
Route::post('/paciente/salvar', [AdministradorController::class, 'salvarP'])->name('paciente.salvar');
Route::get('/administrador/pacientes/historial', [AdministradorController :: class, 'historial'])->name('pacientes.historial');
Route::get('/administrador/pacientes/expedientes', [AdministradorController :: class, 'citas'])->name('pacientes.citas');
//-----------------------------------------------------------------------------------------------------------------
Route::get('/administrador/farmacia', [AdministradorController :: class, 'farmacia'])->name('farmacia');
Route::get('/administrador/farmacia/lista', [AdministradorController :: class, 'listaF'])->name('farmacia.lista');

// Route::get('/administrador/farmacia/cantidad', [AdministradorController :: class, 'cantidad'])->name('farmacia.cantidad');
// Route::get('/administrador/farmacia/cantidad/salvar', [AdministradorController::class, 'salvarEditar'])->name('cantidad.editar.guardar');
// Route::get('/administrador/farmacia/cantidad/editar', [AdministradorController::class, 'editarC'])->name('cantidad.editar');

Route::get('/administrador/farmacia/cantidad', [AdministradorController::class, 'cantidad'])->name('farmacia.cantidad');
Route::post('/administrador/farmacia/cantidad/salvar', [AdministradorController::class, 'salvarEditar'])->name('cantidad.editar.guardar');

Route::get('/administrador/farmacia/crear', [AdministradorController :: class, 'crearF'])->name('farmacia.crear');
Route::post('/farmacia/salvar', [AdministradorController::class, 'salvarF'])->name('farmacia.salvar');


//-------------------------------------------------------------------------------------------------------------------------
//Empleado
Route::get('/empleado/cita/crear', [EmpleadoController :: class, 'crear'])->name('crear');
Route::get('/empleado/cita/pendiente', [EmpleadoController :: class, 'pendiente'])->name('pendiente');
Route::get('/empleado/cita/modificar', [EmpleadoController :: class, 'modificar'])->name('modificar');
Route::get('/empleado/cita/estado', [EmpleadoController :: class, 'estado'])->name('estado');