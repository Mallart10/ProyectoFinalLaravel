@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Alumnos</h1>

    <a href="{{ route('inicio') }}" class="btn btn-secondary mb-3">Volver a Inicio</a>
    <a href="{{ route('alumnos.create') }}" class="btn btn-primary mb-3">Crear nuevo alumno</a>
    <a href="{{ route('alumnos.pdf') }}" class="btn btn-secondary mb-3">Descargar PDF</a>
    <a href="{{ route('alumnos.create') }}" class="btn btn-primary mb-3">Agregar Alumno</a>
    <table border="1" width="100%" cellspacing="0" cellpadding="5">

    @if($alumnos->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Curso</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre_completo }}</td>
                <td>{{ $alumno->curso }}</td>
                <td>{{ $alumno->edad }}</td>
                <td>
                    <a href="{{ route('alumnos.edit', $alumno) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este alumno?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>No hay alumnos registrados.</p>
    @endif
</div>
@endsection
