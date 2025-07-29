<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model


{
    use HasFactory;

    protected $fillable = ['alumno_id', 'actividad_id'];
}



