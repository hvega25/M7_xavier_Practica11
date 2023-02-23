<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorEjercicio1;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return "Página principal";
});

Route::get('/hola', function () {
    return "Hola, que tal";
});
/** Practica 11 - ejercicio 1 */
Route::get('/ej1',[controladorEjercicio1::class, 'ej1Parametro']); 

/** Practica 11 - ejercicio 1-d */
Route::get('/ej4',[controladorEjercicio1::class, 'PrimeraView']); 

Route::get ('/parametros/{parametro1}/{parametro2}/{parametro3}/{parametro4}', [controladorEjercicio1::class, 'variosParametros']);