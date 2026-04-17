<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServicioController;

Route::get('/', [TareaController::class, 'inicio'])->name('inicio');

Route::get('/productos', [ProductoController::class, 'productos'])->name('productos');
Route::get('/createP', [ProductoController::class, 'createP'])->name('productos.createP');
Route::post('/storeP', [ProductoController::class, 'storeP'])->name('productos.storeP');
Route::get('/editP/{id}', [ProductoController::class, 'editP'])->name('productos.editP');
Route::put('/updateP/{id}', [ProductoController::class, 'updateP'])->name('productos.updateP');
Route::get('/verP/{id}', [ProductoController::class, 'verP'])->name('productos.verP');
Route::delete('/destroyP/{id}', [ProductoController::class, 'destroyP'])->name('productos.destroyP');

Route::get('/tareas', [TareaController::class, 'tareas'])->name('tareas');
Route::get('/createT', [TareaController::class, 'createT'])->name('tareas.createT');
Route::post('/storeT', [TareaController::class, 'storeT'])->name('tareas.storeT');
Route::get('/editT/{id}', [TareaController::class, 'editT'])->name('tareas.editT');
Route::put('/updateT/{id}', [TareaController::class, 'updateT'])->name('tareas.updateT');
Route::get('/verT/{id}', [TareaController::class, 'verT'])->name('tareas.verT');
Route::delete('/destroyT/{id}', [TareaController::class, 'destroyT'])->name('tareas.destroyT');
