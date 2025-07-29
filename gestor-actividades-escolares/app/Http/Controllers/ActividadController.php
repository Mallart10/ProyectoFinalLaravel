<?php

use App\Http\Requests\ActividadRequest;

class ActividadController extends Controller
{
   

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

    
}
