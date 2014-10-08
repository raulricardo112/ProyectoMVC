@section('main')
<h2>Posts</h2>
@if ( !@Posts )
 Aún no se han creado Posts en este Blog, vuelve pronto

@else
	<ul>
		@foreach( @Posts as $post )
		<li>
		<a href="{{ route('Posts.show', $post->id) }}">
		<strong>{{ $post->titulo }}</strong></a>
		<p>{{ $post->descripcion }}</p>S
		</li>
		@endforeach
	</ul>
  @endif
 @stop