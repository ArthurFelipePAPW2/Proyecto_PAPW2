@extends('master-busqueda')
@section('title','Gamers')

@section('busqueda-users')
@foreach($ArregloUsuarios as $usuario)
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda">
				<div class="col-md-3"><br>
				<center><a href="/perfil/{{ $usuario->{'id-user'} }}"><img src="data:;base64,{{ $usuario->{'avatar'} }}" class="img-busqueda-perfil"></a></center><br>
			</div>
			<div class="col-md-9">
					<br><h3>{{ $usuario->{'name-user'} }} {{ $usuario->{'last-name-user'} }}</h3><p>{{ $usuario->{'pagina-web-user'} }}</p><p>{{ $usuario->{'correo-contacto-user'} }} </p><br>
			</div>
			</div>
		</div>
	</div>
</div>
@endforeach

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda">
				<div class="col-md-12"><br><center><a href="/search2/users/{{ $termino }}" class="ver-mas">Ver todo</a><br></center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('busqueda-videogames')
@foreach($ArregloVideogames as $videogames)
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda">
				<div class="col-md-3"><br>
				<center><a href="/resena/{{ $videogames->{'id-videogames'} }}"><img src="data:;base64,{{ $videogames->{'cover'} }}" class="img-busqueda-perfil"></a></center><br>
			</div>
			<div class="col-md-9">
					<br><h3>{{ $videogames->{'name-videogame'} }}</h3><p>{{ $videogames->{'name-videogame'} }}</p><br>
			</div>
			</div>
		</div>
	</div>
</div>
@endforeach

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda">
				<div class="col-md-12"><br><center><a href="/search2/videogames/{{ $termino }}" class="ver-mas">Ver todo</a><br></center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection