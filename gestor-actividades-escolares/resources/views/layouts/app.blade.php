<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Aplicaciones Escolares</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Actividades Escolares</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('actividades.index') }}">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('alumnos.index') }}">Alumnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inscripciones.create') }}">Inscribir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdeliv
    
</body>
</html>