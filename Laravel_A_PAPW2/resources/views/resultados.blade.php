@extends('master-resultados')
@section('title','Gamers')

@section('resultados')
@if($modo == 'videogames')
@foreach($DatosBusqueda as $resultado)
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda resultados-tabla">
				<div class="col-md-3"><br>
				<center><a href="/resena/{{$resultado->{'id-videogame'} }}"><img src="data:;base64,{{ $resultado->{'cover'} }}" class="img-busqueda-perfil"></a></center><br>
			</div>
			<div class="col-md-9">
					<br><h3>{{ $resultado->{'name-videogame'} }}</h3><p>{{ $resultado->{'description'} }}</p><br>
			</div>
			</div>
		</div>
	</div>
</div>
@endforeach
<div class="container nav-button">
    <div class="row">
      <div class="col-md-9"> <center>{!! $DatosBusqueda->render() !!}</center></div>
    </div>
  </div>
@elseif($modo == 'users')
@foreach($DatosBusqueda as $resultado)
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda resultados-tabla">
				<div class="col-md-3"><br>
				<center><a href="/perfil/{{ $resultado->{'id-user'} }}"><img src="data:;base64,{{ $resultado->{'avatar'} }}" class="img-busqueda-perfil"></a></center><br>
			</div>
			<div class="col-md-9">
					<br><h3>{{ $resultado->{'name-user'} }} {{ $resultado->{'last-name-user'} }}</h3><p>{{ $resultado->{'pagina-web-user'} }}</p><p>{{ $resultado->{'correo-contacto-user'} }}</p><br>
			</div>
			</div>
		</div>
	</div>
</div>
@endforeach
<div class="container nav-button">
    <div class="row">
      <div class="col-md-9"> <center>{!! $DatosBusqueda->render() !!}</center></div>
    </div>
  </div>
@endif
@endsection

@section('busqueda-avanzada')
{{Form::open(array('class' => 'form-avanzado','url' => '/search2/'.$modo.'/'.$termino,'method' => 'get','role' => 'search'))}}

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row busqueda-avanzada">
				<div class="col-md-2 col-xs-12">
					{{ Form::label('search', 'Busqueda Avanzada', array('class' => 'text-avanzado')) }}
				</div>
				@if($modo == 'videogames')
				<div class="col-md-4 col-xs-5"><br>
					{{ Form::select('type', array(
				'1' => 'Plataforma',
				'2' => 'Productor',
				'3' => 'Desarrolladora',
				'4' => 'Distribuidora',
				'5' => 'Genero',
				), 'null',['class'=>'form-control'])}}<br>
				</div>
				@elseif($modo=='users')
				<div class="col-md-4 col-xs-5"><br>
					{{ Form::select('type', array(
				'1' => 'Correo de Contacto',
				'2' => 'Página web'
				), 'null',['class'=>'form-control'])}}<br>
				</div>
				@endif
				
				<div class="col-md-4 col-xs-5"><br>
					{{ Form::text('search', null, array('placeholder'=>'Buscar','class' => 'form-control','required')) }}<br>
				</div>
				<div class="col-md-1 col-xs-2"><br>
					{{ Form::button('<i class="glyphicon glyphicon-search"></i>', array('type' => 'submit', 'class' =>'btn btn-default')) }} <br>
				</div>
			</div>
		</div>	
	</div>
</div>	
	{{Form::close()}}
@endsection

@section('buscador')
<div class="container resultado-texto">
	<div class="row">
		<div class="col-md-9">
			<h3>Resultados para '{{ $termino }}'</h3>
		</div>
	</div>
</div>
@endsection