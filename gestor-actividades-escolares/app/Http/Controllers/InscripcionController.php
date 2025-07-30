<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Alumno;
use App\Models\Actividad;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{

    public function index()
 {
    $inscripciones = Inscripcion::with(['alumno', 'actividad'])->get();
    return view('inscripciones.index', compact('inscripciones'));
 }
    
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

         $existe = Inscripcion::where('alumno_id', $request->alumno_id)
                             ->where('actividad_id', $request->actividad_id)
                             ->first();
        if ($existe) {
            return redirect()->back()->withErrors(['Ya existe esta inscripción.'])->withInput();
        return redirect()->route('alumnos.index')->with('succes','Inscripcion restringida ');
    }

    Inscripcion::create([
            'alumno_id' => $request->alumno_id,
            'actividad_id' => $request->actividad_id,
        ]);

        return redirect()->route('inscripciones.index')->with('success', 'Inscripción registrada con éxito.');
    }
    
}
