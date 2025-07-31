<h1>Listado de Inscripciones</h1>
<table border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>Alumno</th>
            <th>Actividad</th>
        </tr>
    </thead>
    <tbody>
        @foreach($inscripciones as $inscripcion)
            <tr>
                <td>{{ $inscripcion->alumno->nombre }}</td>
                <td>{{ $inscripcion->actividad->nombre }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
