<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use Illuminate\Http\JsonResponse;

class ActividadApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Actividad::all());
    }
}

