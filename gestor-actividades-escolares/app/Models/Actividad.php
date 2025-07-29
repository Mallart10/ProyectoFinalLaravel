<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Actividad extends Model
{
    use HasFactory;

    // ✅ Soluciona el problema indicando el nombre correcto de la tabla
    protected $table = 'actividades';

    protected $fillable = [
        'nombre',
        'descripcion',
        'dia_semana',
        'horario'
    ];
}
