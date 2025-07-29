<?php

namespace App\Http\Controllers;

use App\Model\Alumno;
use App\Models\Actividad;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    
    
    public function create()
    {
        $alumnos = Alumno::all();
        $actividades = Actividad::all();
        return view('inscripciones.create', compact('alumnos', 'actividades'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'alumno_id' => 'required|exist:alumnos,id',
            'actividad_id' => 'required|exists:actividades.id'
        ]);

        $alumno = alumno::findOrfail($request->alumno_id);
        $alumno->actividades()->attach($request->actividad_id);

        return redirect()->route('alumnos.index')->with('succes','Inscripcion restringida ');
    }

    
}
