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
            ['nombre' => 'Juan Pérez', 'curso' => '4º Primaria', 'edad' => 9],
            ['nombre' => 'Laura Gómez', 'curso' => '5º Primaria', 'edad' => 10],
            ['nombre' => 'Carlos Ruiz', 'curso' => '6º Primaria', 'edad' => 11],
            ['nombre' => 'Ana Torres', 'curso' => '3º Primaria', 'edad' => 8],
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

