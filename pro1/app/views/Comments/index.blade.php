@section('main')
<h2>Coments</h2>
@if (!$coments->count())
Aun  no se ha crreado Post en este blog, vuelve pronto
@else
<ul>
	@foreach($coments as $coment)
	<li>
		<a href="{{route('Comments.show',$coment->id)}}">
		<strong>{{$coment->titulo}}</strong></a>
		<p>{{$coment->comentario}}</p>
		<p>{{$coment->id}}</p>
	</li>
	@endforeach
</ul>
@endif
@stop