<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnosSeeder extends Seeder
{
    public function run(): void
    {
        $alumnos = [
            ['nombre_completo' => 'Juan Pérez', 'curso' => '4º Primaria', 'edad' => 9],
            ['nombre_completo' => 'Laura Gómez', 'curso' => '5º Primaria', 'edad' => 10],
            ['nombre_completo' => 'Carlos Ruiz', 'curso' => '6º Primaria', 'edad' => 11],
            ['nombre_completo' => 'Ana Torres', 'curso' => '3º Primaria', 'edad' => 8],
        ];

        foreach ($alumnos as $alumno) {
            Alumno::create($alumno);
        }
    }

    public function actividades()
 {
    return $this->belongsToMany(Actividad::class, 'inscripciones');
 }
}

