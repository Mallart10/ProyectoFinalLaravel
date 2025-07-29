

@extendes('layoust.app')

@section('content')
<h1>{{$atividad->nombre }}</h1>
<p><strong>Descripción:</strong> {{$atividad->descripción }}</p>
<p><strong>Día:</strong> {{ $atividad->dia_semana }}</p>
<p><strong>Horario:</strong> {{$atividad->horario}}</p>

<a href="{{ route('actividades.index') }}" class="btn btn-secondary">Volver</a>
@endsection