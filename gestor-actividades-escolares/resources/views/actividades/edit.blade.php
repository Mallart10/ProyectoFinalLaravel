@extends('layouts.app')

@section('content')
<h1>Editar Actividad</h1>

<form action="{{ route('actividades.update', $actividad) }}" method="POST">
    @csrf 
    @method('PUT')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Errores encontrados:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>  
        </div>
    @endif

    <div class="form-group">
        <label>Nombre:</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $actividad->nombre) }}" required>
    </div>

    <div class="form-group">
        <label>Descripción:</label>
        <textarea name="descripcion" class="form-control" required>{{ old('descripcion', $actividad->descripcion) }}</textarea>
    </div>

    <div class="form-group">
        <label>Día de la semana:</label>
        <input type="text" name="dia_semana" class="form-control" value="{{ old('dia_semana', $actividad->dia_semana) }}" required>
    </div>

    <div class="form-group">
        <label>Horario:</label>
        <input type="text" name="horario" class="form-control" value="{{ old('horario', $actividad->horario) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
