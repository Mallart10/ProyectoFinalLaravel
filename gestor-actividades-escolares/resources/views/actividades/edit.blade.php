

@extends('layouts.app')

@section('content')
<h1>Editar Actividad</h1>
<form method="POST" action="{{ route('actividades.update' , $actividad) }}">
    @csrf @method('PUT')
    @if ($error->any())
       <div class="alert alert-danger">
         <strong>Errores encontrados:</strong>
         <ul>
            @foreach ($errors->all as $error)"
                 <li>{{ $error }}</li>
            @endforeach
         </ul>  
        </div>
    @endif
    <div class="form-group">
        <label>Nombre:</label>
        <input type="text" name="nombre_completo" class="form-control" value="{{ $actividad->nombre_completo }}" required>
    </div>
    <div class="form-group">
        <label>Descripción:</label>
        <textarea name="descripcion" class="form-control">{{ $actividad->descripcion }}</textarea>
    </div>
    <div class="form-group">
        <label>Día de la semana:</label>
        <input type="text" name="dia_semana" class="form-control" value="{{ $actividad->dia_semana }}" required>
    </div>
    <div class="form-group">
        <label>Horario:</label>
        <input type="text" name="horario" class="form-control" value="{{ $actividad->horario }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
    