@extends('master-resultados')
@section('title','Gamers')

@section('resultados')
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda resultados-tabla">
				<div class="col-md-3"><br>
				<center><a href="resena/1"><img src="Imagenes/Anon.jpg" class="img-busqueda-perfil"></a></center><br>
			</div>
			<div class="col-md-9">
					<br><h3>Nombre User/Vdj</h3><p>Algo de info</p><br>
			</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda resultados-tabla">
				<div class="col-md-3"><br>
				<center><a href="resena/1"><img src="Imagenes/Anon.jpg" class="img-busqueda-perfil"></a></center><br>
			</div>
			<div class="col-md-9">
					<br><h3>Nombre User/Vdj</h3><p>Algo de info</p><br>
			</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row cuadro-busqueda resultados-tabla">
				<div class="col-md-3"><br>
				<center><a href="resena/1"><img src="Imagenes/Anon.jpg" class="img-busqueda-perfil"></a></center><br>
			</div>
			<div class="col-md-9">
					<br><h3>Nombre User/Vdj</h3><p>Algo de info</p><br>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('busqueda-avanzada')
{{Form::open(array('class' => 'form-avanzado','url' => 'busquedaAvanzada','method' => 'post'))}}
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row busqueda-avanzada">
				<div class="col-md-2 col-xs-12">
					{{ Form::label('busqueda', 'Busqueda Avanzada', array('class' => 'text-avanzado')) }}
				</div>
				<div class="col-md-4 col-xs-5"><br>
					{{ Form::select('tipo', array(
				'1' => 'Plataforma',
				'2' => 'Productor',
				'3' => 'Desarrolladora',
				'4' => 'Distribuidora',
				'5' => 'Genero',
				), 'null',['class'=>'form-control'])}}<br>
				</div>
				<div class="col-md-4 col-xs-5"><br>
					{{ Form::text('busqueda', null, array('placeholder'=>'Buscar','class' => 'form-control')) }}<br>
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