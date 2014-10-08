@section('main')
<h2>Logs</h2>
@if (!$logs->count())
Aun  no se ha crreado Post en este blog, vuelve pronto
@else
<ul>
	@foreach($logs as $log)
	<li>
		<a href="{{route('Logs.show',$log->id)}}">
		<p>{{$log->descripcion}}</p></a>
	</li>
	@endforeach
</ul>
@endif
@stop