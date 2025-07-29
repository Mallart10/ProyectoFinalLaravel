
@extends('layouts.app')

@section('content')
<h1>Lista de Actividades</h1>
<a href="{{ route('actividades.create') }}" class="btn btn-primary mb-3">Nueva Actividad</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Día</th>
            <th>Horario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($actividades as $actividad)
        <tr>
            <td>{{ $actividad->nombre }}</td>
            <td>{{ $actividad->dia_semana }}</td>
            <td>{{ $actividad->horario }}</td>
            <td>
                <a href="{{ route('actividades.show', $actividad) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('actividades.edit', $actividad) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('actividades.destroy', $actividad) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
        
            
        

