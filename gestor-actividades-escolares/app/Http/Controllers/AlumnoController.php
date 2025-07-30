<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;


class AlumnoController extends Controller
{
    
      public function index()
     
  {
    $alumnos = Alumno::all();
     return view('alumnos.index', compact('alumnos'));
  }

  public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_completo' => 'required',
            'curso' => 'required',
            'edad' => 'required|integer|min:3'
        ]);

        Alumno::create($request->all());
        return redirect()->route('alumnos.index')->wiht('succes', 'Alumno creado');
    }

    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }
    
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'nombre_completo' => 'required',
            'curso' => 'required',
            'edad' => 'required|integer|min:3'
        ]);

        Alumno::create($request->all());
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado.');
    }

  
    
   

   
    

   

    
    

    
    

    
    
}
