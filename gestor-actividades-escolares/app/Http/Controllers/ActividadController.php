<?php

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return view('actividades.index', compact('actividades'));
    }

    public function create()
    {
        return view('actividades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'dia_semana' => 'required',
            'horario' => 'required',
        ]);

        Actividad::create($request->all());
        return redirect()->route('actividades.index')->with('success', 'Actividad creada');
    }

    public function show(Actividad $actividad)
    {
        return view('actividades.show', compact('actividad'));
    }

    public function edit(Actividad $actividad)
    {
        return view('actividades.edit', compact('actividad'));
    }

    public function update(Request $request, Actividad $actividad)
    {
        $request->validate([
            'nombre' => 'required',
            'dia_semana' => 'required',
            'horario' => 'required',
        ]);

        $actividad->update($request->all());
        return redirect()->route('actividades.index')->with('success', 'Actividad actualizada');
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividades.index')->with('success', 'Actividad eliminada');
    }
}
