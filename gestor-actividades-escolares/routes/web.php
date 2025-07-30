<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\InscripcionController;

Route::resource('actividades', ActividadController::class);
Route::resource('alumnos', AlumnoController::class);
Route::get('inscripciones', [InscripcionController::class, 'index'])->name('inscripciones.index');
Route::get('inscripciones/create', [InscripcionController::class, 'create'])->name('inscripciones.create');
Route::post('inscripciones', [InscripcionController::class, 'store'])->name('inscripciones.store');