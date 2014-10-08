@section('main')
<h2>Posts</h2>
@if ( !@Posts )
 Aún no se han creado Posts en este Blog, vuelve pronto

@else
	<ul>
		@foreach( @posts as $post )
		<li>
		<a href="{{ route('Posts.show', $post->id) }}">
		<strong>{{ $Post->titulo }}</strong></a>
		<p>{{ $post->descripcion }}</p>S
		</li>
		@endforeach
	</ul>
  @endif
 @sto