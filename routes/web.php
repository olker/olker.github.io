<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\MostrarLibreria;
use App\Http\Livewire\CrearLibreria;
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

Route::get('/', homeController::class)->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/registro/libreria',function(){
    return view('registro-librerias');
})->name('libreria.registro');
Route::middleware(['auth:sanctum', 'verified'])->post('/registro/libreria/store',[CrearLibreria::class,'store'])->name('libreria.store');
Route::get('/mostrar/libreria/{libreria}',[MostrarLibreria::class,'show'])->name('libreria.mostrar');
Route::middleware(['auth:sanctum', 'verified'])->get('eliminar/libreria/{datos}', [MostrarLibreria::class,'delete'])->name('delete.libreria');

