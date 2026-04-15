<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\ProductoController;

Route::get('/', [TareaController::class, 'inicio'])->name('inicio');
Route::get('/productos', [ProductoController::class, 'productos'])->name('productos');
Route::get('/createP', [ProductoController::class, 'createP'])->name('productos.createP');
Route::post('/storeP', [ProductoController::class, 'storeP'])->name('productos.storeP');
Route::get('/tareas', [TareaController::class, 'tareas'])->name('tareas');
Route::get('/createT', [TareaController::class, 'createT'])->name('tareas.createT');
Route::post('/storeT', [TareaController::class, 'storeT'])->name('tareas.storeT');