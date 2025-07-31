@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Inscripciones</h1>

    <a href="{{ route('inscripciones.create') }}" class="btn btn-primary mb-3">Nueva Inscripción</a>
    <a href="{{ route('inicio') }}" class="btn btn-secondary mb-3">Volver a Inicio</a>
    <a href="{{ route('inscripciones.create') }}" class="btn btn-primary mb-3">Crear nueva inscripción</a>
    <a href="{{ route('inscripciones.pdf') }}" class="btn btn-secondary mb-3">Descargar PDF</a>


    @if($inscripciones->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Actividad</th>
                <th>Fecha de inscripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscripciones as $inscripcion)
            <tr>
                <td>{{ $inscripcion->alumno->nombre_completo }}</td>
                <td>{{ $inscripcion->actividad->nombre }}</td>
                <td>{{ $inscripcion->created_at->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>No hay inscripciones registradas.</p>
    @endif
</div>
@endsection