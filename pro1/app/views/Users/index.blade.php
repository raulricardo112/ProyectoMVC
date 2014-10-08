@section('main')
<h2>Users</h2>
@if (!$users->count())
Aun  no se ha crreado Post en este blog, vuelve pronto
@else
<ul>
	@foreach($users as $user)
	<li>
		<a href="{{route('Users.show',$user->id)}}">
		<strong>{{$user->titulo}}</strong></a>
		<p>{{$user->nombre}}</p>
		<p>{{$user->email}}</p>
		<p>{{$user->username}}</p>
	</li>
	@endforeach
</ul>
@endif
@stop