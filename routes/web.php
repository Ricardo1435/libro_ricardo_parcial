<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

})->name('home');

Route::prefix('/libro')->group(
    function (){

        //Rutas de vistas
        Route::get('/', [\App\Http\Controllers\LibroController::class, 'index'])->name('libroIndex');

        Route::get('/register', [\App\Http\Controllers\LibroController::class, 'register'])->name('libroRegister');


        //Rutas http, peticiones al server
        Route::post('/create', [\App\Http\Controllers\LibroController::class, 'create'])->name('libroCreate');

    }
);
