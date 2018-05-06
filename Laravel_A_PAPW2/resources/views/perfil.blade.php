@extends('master-perfil')
@section('title','Gamer')

@section('img')
<img src="Imagenes/anon.jpg" class="img-rounded img-responsive">
@endsection

@section('acerca-de-mi')
No sé si hice los blades bien pero esto está jalando ptm :), felipe ni hace nada
@endsection


@section('form-nombre')
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::text('apellido', 'Nombre del Usuario', array('required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@endsection

@section('form-apellido')
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::text('apellido', 'Apellido del Usuario', array('required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@endsection

@section('form-ciudad')
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::select('ciudad', array(
    '1' => 'Ciudad1', 
    '2' => 'Ciudad2',
    '3' => 'Ciudad3',
    '4' => 'Ciudad4',
    '5' => 'Ciudad5',
    '6' => 'Ciudad6'),
  'null',['class'=>'form-control'])}}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@endsection

@section('form-correo')
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::email('correo', 'Correo.del@Usuario.meme', array('required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@endsection

@section('form-pagina')
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::text('pagina', 'Pagina-del-Usuario.com', array('required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@endsection


@section('form-pregunta')
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::select('pregunta', array(
    '1' => 'Pregunta1', 
    '2' => 'Pregunta2',
    '3' => 'Pregunta3',
    '4' => 'Pregunta4',
    '5' => 'Pregunta5',
    '6' => 'Pregunta6'),
  'null',['class'=>'form-control'])}}
<br>
		{{ Form::text('respuesta', 'Respuesta del Usuario', array('required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@endsection

@section('form-contrasena')
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::input('password', 'contrasena', 'holamundo123', array('id' => 'pass','required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@endsection