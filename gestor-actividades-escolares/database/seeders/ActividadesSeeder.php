<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actividad;

class ActividadesSeeder extends Seeder
{
    public function run(): void
    {
        $actividades = [
            ['nombre' => 'Ajedrez', 'descripcion' => 'Desarrolla el pensamiento lógico', 'dia_semana' => 'Lunes', 'horario' => '15:00 - 16:30'],
            ['nombre' => 'Robótica', 'descripcion' => 'Construcción de robots', 'dia_semana' => 'Martes', 'horario' => '16:00 - 17:30'],
            ['nombre' => 'Pintura', 'descripcion' => 'Expresión artística', 'dia_semana' => 'Miércoles', 'horario' => '14:30 - 16:00'],
            ['nombre' => 'Inglés', 'descripcion' => 'Aprendizaje del idioma', 'dia_semana' => 'Jueves', 'horario' => '13:00 - 14:00'],
        ];

        foreach ($actividades as $actividad) {
            Actividad::create($actividad);
        }
    }
}

