@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Panel Principal</h1>

    <div class="row">
        <div class="col-md-4 mb-3">
            <a href="{{ route('alumnos.index') }}" class="card bg-primary text-white text-center text-decoration-none">
                <div class="card-body">
                    <h3>Alumnos</h3>
                    <p>Gestionar alumnos</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ route('actividades.index') }}" class="card bg-success text-white text-center text-decoration-none">
                <div class="card-body">
                    <h3>Actividades</h3>
                    <p>Ver y crear actividades</p>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-3">
            <a href="{{ route('inscripciones.index') }}" class="card bg-warning text-white text-center text-decoration-none">
                <div class="card-body">
                    <h3>Inscripciones</h3>
                    <p>Inscribir alumnos</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
