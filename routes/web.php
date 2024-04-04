<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');
Route::get('/productos/crear', [ProductController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductController::class, 'store'])->name('productos.store');
Route::get('/productos/{id}/editar', [ProductController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{id}', [ProductController::class, 'update'])->name('productos.update');
Route::delete('/productos/{id}', [ProductController::class, 'destroy'])->name('productos.destroy');


