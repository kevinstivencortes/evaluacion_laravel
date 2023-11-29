<?php

use App\Http\Controllers\ControllerUsuario;
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

Route::get('/usuario', [ControllerUsuario::class,'index'])-> name ('usuario.index');
Route::post('/usuario', [ControllerUsuario::class,'store']);


Route::get('/editar', function () {
    return view('editar');
});
Route::get('/eliminar', function () {
    return view('eliminar');
});
Route::get('/mostrar', function () {
    return view('mostrar');
});
