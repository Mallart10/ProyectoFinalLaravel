
    
      @extends('layouts.app')

@section('content')
<h1>Crear Actividad</h1>

<form action="{{ route('actividades.store') }}" method="POST">
    @csrf

    {{-- Mensajes de error de validación --}}
    @if ($errors->any())
       <div class="alert alert-danger">
         <strong>Errores encontrados:</strong>
         <ul>
            @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
            @endforeach
         </ul>  
       </div>
    @endif

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="descripcion" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Día de la semana</label>
        <input type="text" name="dia_semana" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Horario</label>
        <input type="text" name="horario" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('inicio') }}" class="btn btn-secondary">Volver al inicio</a>
</form>
@endsection
  


       