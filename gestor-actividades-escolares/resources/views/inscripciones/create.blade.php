@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inscribir Alumno en Actividad</h1>

    <form action="{{ route('inscripciones.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="alumno_id" class="form-label">Alumno</label>
            <select name="alumno_id" class="form-control">
                <option value="">Seleccione un alumno</option>
                @foreach($alumnos as $alumno)
                    <option value="{{ $alumno->id }}" {{ old('alumno_id') == $alumno->id ? 'selected' : '' }}>
                        {{ $alumno->nombre_completo }}
                    </option>
                @endforeach
            </select>
            @error('alumno_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="actividad_id" class="form-label">Actividad</label>
            <select name="actividad_id" class="form-control">
                <option value="">Seleccione una actividad</option>
                @foreach($actividades as $actividad)
                    <option value="{{ $actividad->id }}" {{ old('actividad_id') == $actividad->id ? 'selected' : '' }}>
                        {{ $actividad->nombre }} ({{ $actividad->dia_semana }} - {{ $actividad->horario }})
                    </option>
                @endforeach
            </select>
            @error('actividad_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Inscribir</button>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection