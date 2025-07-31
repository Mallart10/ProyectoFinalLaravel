
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\InscripcionController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// ✅ Usa solo la línea resource (esto incluye update, show, edit, destroy, etc.)
Route::resource('actividades', ActividadController::class);
Route::resource('alumnos', AlumnoController::class);
Route::resource('inscripciones', InscripcionController::class);
