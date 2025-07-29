<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    
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
    
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'nombre_completo' => 'required',
            'curso' => 'required',
            'edad' => 'required|integer|min:3'
        ]);
    }

    
   

   
    

   

    
    

    
    

    
    
}
