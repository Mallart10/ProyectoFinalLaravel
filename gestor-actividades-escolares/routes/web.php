
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\InscripcionController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// ✅ Usa solo la línea resource (esto incluye update, show, edit, destroy, etc.)
Route::resource('actividades', ActividadController::class)->parameters(['actividades' => 'actividad']);
Route::resource('alumnos', AlumnoController::class);
Route::resource('inscripciones', InscripcionController::class);
Route::get('alumnos-pdf', [AlumnoController::class, 'pdf'])->name('alumnos.pdf');
Route::get('actividades-pdf', [ActividadController::class, 'pdf'])->name('actividades.pdf');
Route::get('inscripciones-pdf', [InscripcionController::class, 'pdf'])->name('inscripciones.pdf');