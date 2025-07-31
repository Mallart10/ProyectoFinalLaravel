<h1>Listado de Actividades</h1>

<table border="1" width="100%" cellspacing="0" cellpadding="5">
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
