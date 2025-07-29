<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use  HasFactory;

    protected $fillable = ['nombre_completo','cruso','edad'];

    public function actividades()
    {
        return $this->belongsToMany(Actividad::class,'inscripciones');
    }
}
