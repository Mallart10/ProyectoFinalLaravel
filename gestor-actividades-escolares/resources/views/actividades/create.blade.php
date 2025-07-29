

@extends('layouts.app')

@section('content')
<h1>Crear Actividad</h1>
<form method="POST" action="{{ route('acividades.store')}}">
    @csrf
    @if ($error->any())
       <div class="alert alert-danger">
         <strong>Errores encontrados:</strong>
         <ul>
            @foreach ($errors->all as $error)"
                 <li>{{ $error }}</li>
            @endforeach
         </ul>  
        </div>
    @endif
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre_completo" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" class="form-control"></textarea>
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

</form>
@endsection


    
        


       