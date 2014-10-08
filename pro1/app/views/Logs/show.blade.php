@section('main')
@if ( !$log )
No se encontró la publicación
@else
<h2>{{ $log->titulo }}</h2>
<span>Por: {{ $log->user->nombre }} el {{ $log->user->created_at }}</span>
<p>
	{{ $log->descripcion }}
</p>
<p><strong>Tags: </strong> {{ $log->tags }}
<p>
@endif
<p>
	<a href="{{ route('Logs.index') }}">Volver a Logs</a>
</p>
@stop