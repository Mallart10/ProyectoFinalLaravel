<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_completo', 'curso', 'edad'];
}
