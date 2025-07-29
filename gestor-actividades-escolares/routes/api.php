<?php

use App\Http\Controllers\Api\ActividadApiController;

Route::get('/actividades', [ActividadApiController::class, 'index']);