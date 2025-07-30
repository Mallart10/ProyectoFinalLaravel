@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Alumno</h1>

    <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre_completo" class="form-label">Nombre Completo</label>
            <input type="text" name="nombre_completo" class="form-control" value="{{ old('nombre_completo', $alumno->nombre_completo) }}">
            @error('nombre_completo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="curso" class="form-label">Curso</label>
            <input type="text" name="curso" class="form-control" value="{{ old('curso', $alumno->curso) }}">
            @error('curso')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" name="edad" class="form-control" value="{{ old('edad', $alumno->edad) }}">
            @error('edad')
                <small class="text-danger">{{ $message }}</small>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
