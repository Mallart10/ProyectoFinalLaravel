<?php

use Illuminate\Support\Facades\Route;

Route::get('/actividades', [ActividadController::class, 'index'])->name('actividades.index');
