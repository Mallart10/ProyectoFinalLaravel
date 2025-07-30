<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Actividad;

class InscripcionesSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener todos los alumnos y actividades
        $alumnos = Alumno::all();
        $actividades = Actividad::all();

        // Relacionar cada alumno con 1-2 actividades aleatorias
        // foreach ($alumnos as $alumno) {
        //     $alumno->actividades()->attach(
        //         $actividades->random(rand(1, 2))->pluck('id')->toArray()
        //     );
        // }
    }
}

