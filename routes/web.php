<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CholloController;

Route::get('/', [CholloController::class, 'index'])->name('home');
Route::get('/chollos/create', [CholloController::class, 'create'])->name('chollos.create');
Route::post('/chollos', [CholloController::class, 'store'])->name('chollos.store');
Route::get('/chollos/{id}/edit', [CholloController::class, 'edit'])->name('chollos.edit');
Route::put('/chollos/{id}', [CholloController::class, 'update'])->name('chollos.update');
Route::delete('/chollos/{id}', [CholloController::class, 'destroy'])->name('chollos.destroy');
Route::get('/nuevos', [CholloController::class, 'nuevos'])->name('nuevos');
Route::get('/destacados', [CholloController::class, 'destacados'])->name('destacados');
Route::get('/chollos/{id}', [CholloController::class, 'show'])->name('chollos.show');
Route::get('/chollos/create', [CholloController::class, 'create'])->name('chollos.create');
