@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Actividades</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($actividades->isEmpty())
            <p>No hay actividades registradas.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Día</th>
                        <th>Horario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($actividades as $actividad)
                        <tr>
                            <td>{{ $actividad->nombre }}</td>
                            <td>{{ $actividad->dia_semana }}</td>
                            <td>{{ $actividad->horario }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
