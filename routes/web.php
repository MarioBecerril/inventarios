<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;
use App\Models\Tarea;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tareas/pendientes', [TareasController::class, 'pendientes'])->name('tareas.pendientes');
Route::resource('tareas', TareasController::class);