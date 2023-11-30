<?php

use App\Http\Controllers\UsuarioController;
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

Route::get('/', function () {
    return view('nada');
});

Route::get('/usuario', [UsuarioController::class,'index'])-> name ('usuario.index');
Route::post('/usuario', [UsuarioController::class,'store']);

/* Route::get('/mostrar', [Controllermostrar::class,'index'])-> name ('mostrar.index'); */


Route::get('/principal', function () {
    return view('principal');
});

Route::get('/mostrar', [UsuarioController::class, 'index'])->name('mostrar.index');

Route::get('/editar/{id}', [UsuarioController::class, 'edit'])->name('editar.index');
Route::put('/editar/{id}', [UsuarioController::class, 'update'])->name('editar.update');
Route::delete('/eliminar/{id}', [UsuarioController::class, 'destroy'])->name('eliminar.index');


