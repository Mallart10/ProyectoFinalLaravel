<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model


{
    use HasFactory;

    protected $table = 'inscripciones';

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class);
    }
}



