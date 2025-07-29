     @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Actividades</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('actividades.create') }}" class="btn btn-primary mb-3">Crear nueva actividad</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Día de la semana</th>
                    <th>Horario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($actividades as $actividad)
                    <tr>
                        <td>{{ $actividad->nombre }}</td>
                        <td>{{ $actividad->dia_semana }}</td>
                        <td>{{ $actividad->horario }}</td>
                        <td>
                            <a href="{{ route('actividades.show', $actividad) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('actividades.edit', $actividad) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('actividades.destroy', $actividad) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

        

