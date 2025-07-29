<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Actividad;

class ActividadApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'actividades'=>Actividad::all()
        ]);
    }
}
