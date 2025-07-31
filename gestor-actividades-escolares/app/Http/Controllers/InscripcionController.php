<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Alumno;
use App\Models\Actividad;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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
            'alumno_id' => 'required|exists:alumnos,id',
            'actividad_id' => 'required|exists:actividades,id',
        ]);

        $exists = Inscripcion::where('alumno_id', $request->alumno_id)
                             ->where('actividad_id', $request->actividad_id)
                             ->first();

        if ($exists) {
            return redirect()->back()
                ->withErrors(['Ya existe esta inscripción.'])
                ->withInput();
        }

        Inscripcion::create([
            'alumno_id' => $request->alumno_id,
            'actividad_id' => $request->actividad_id,
        ]);

        return redirect()->route('inscripciones.index')
            ->with('success', 'Inscripción registrada con éxito.');
    }

    public function pdf()
{
    $inscripciones = \App\Models\Inscripcion::with(['alumno', 'actividad'])->get();
    $pdf = Pdf::loadView('pdf.inscripciones', compact('inscripciones'));
    return $pdf->download('inscripciones.pdf');
}
}
