@extends('master-busqueda')
@section('title','Gamers')

@section('busqueda-users')
@if(count($ArregloUsuarios) != 0)
<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h1 class="titulo-busqueda">Usuarios</h1>
				</div>
			</div>
		</div>
@foreach($ArregloUsuarios as $usuario)
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda">
				<div class="col-md-3"><br>
				<center><a href="/perfil/{{ $usuario->{'id-user'} }}"><img src="data:;base64,{{ $usuario->{'avatar'} }}" class="img-busqueda-perfil"></a></center><br>
			</div>
			<div class="col-md-9">
					<a href="/perfil/{{ $usuario->{'id-user'} }}"><h3 class="text-descripcion">{{ $usuario->{'name-user'} }} {{ $usuario->{'last-name-user'} }}</h3></a><p class="text-descripcion3">{{ $usuario->{'pagina-web-user'} }}</p><p class="text-descripcion3">{{ $usuario->{'correo-contacto-user'} }} </p>
			</div>
			</div>
		</div>
	</div>
</div>
@endforeach

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda2">
				<div class="col-md-12"><br><center><a href="/search2/users/{{ $termino }}" class="ver-mas">Ver todo</a><br></center>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endsection

@section('busqueda-videogames')
@if(count($ArregloVideogames) != 0)
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h1 class="titulo-busqueda">Videojuegos</h1>
				</div>
			</div>
		</div>
@foreach($ArregloVideogames as $videogames)
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda">
				<div class="col-md-3"><br>
				<center><a href="/resena/{{ $videogames->{'id-videogame'} }}"><img src="data:;base64,{{ $videogames->{'cover'} }}" class="img-busqueda-perfil"></a></center><br>
			</div>
			<div class="col-md-9">
					<a href="/resena/{{ $videogames->{'id-videogame'} }}"><h3 class="text-descripcion">{{ $videogames->{'name-videogame'} }}</h3></a><p class="text-descripcion3">By {{ $videogames->{'productor'} }}</p>
			</div>
			</div>
		</div>
	</div>
</div>
@endforeach

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda2">
				<div class="col-md-12"><br><center><a href="/search2/videogames/{{ $termino }}" class="ver-mas">Ver todo</a><br></center>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endsection

@section('warning')
@if(count($ArregloVideogames) == 0 && count($ArregloUsuarios) == 0)
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<center>
				<h1 class="text-descripcion2">Lo sentimos, pero tu búsqueda no ha tenido ningun resultado :(</h1>

			</center>
		</div>
	</div>
</div>
@endif
@endsection