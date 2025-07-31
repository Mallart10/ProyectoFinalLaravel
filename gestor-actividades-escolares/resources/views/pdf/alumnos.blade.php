<h1>Listado de Alumnos</h1>

<table border="1" width="100%" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Curso</th>
            <th>Edad</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre_completo }}</td>
                <td>{{ $alumno->curso }}</td>
                <td>{{ $alumno->edad }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
