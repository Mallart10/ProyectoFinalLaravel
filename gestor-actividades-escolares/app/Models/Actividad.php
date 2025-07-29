<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFacoty;

    protected $fillable= ['nombre','descipcion','dia_semana','horario'];

    public function  alumnos()
    {
        return $this->belongsToMany(Alumnos::class, 'inscripciones');
    }
}
