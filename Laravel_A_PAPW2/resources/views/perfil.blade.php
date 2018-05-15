@extends('master-perfil')
@section('title','Gamer')

@section('img')
<img src="data:;base64,{{ $InfoDePerfil->{'avatar'} }}" class="img-rounded img-responsive">
@endsection

@section('nombre-perfil')
{{ $InfoDePerfil->{'name-user'} }} {{ $InfoDePerfil->{'last-name-user'} }}
@endsection

@section('acerca-de-mi')
<b>Fecha de cumpleaños:</b> {{ $InfoDePerfil->{'birthday'} }} <br>
<b>Soy de:</b> {{ $InfoDePerfil->{'id-city'} }}
@endsection


@section('form-nombre')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::text('apellido', $InfoDePerfil->{'name-user'} , array('required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@else
	<td>
		{{ $InfoDePerfil->{'name-user'} }}
	</td>
	<td>
	</td>
@endif
@endsection

@section('form-apellido')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::text('apellido', $InfoDePerfil->{'last-name-user'}, array('required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@else
	<td>
		{{ $InfoDePerfil->{'last-name-user'} }}
	</td>
	<td>
	</td>
@endif
@endsection

@section('form-ciudad')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::select('ciudad',$ciudades,$InfoDePerfil->{'id-city'},['class'=>'form-control'])}}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@else
	<td>
		{{ $InfoDePerfil->{'id-city'} }}
	</td>
	<td>
	</td>
@endif
@endsection

@section('form-correo')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::email('correo', $InfoDePerfil->{'correo-contacto-user'}, array('required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@else
	<td>
		{{ $InfoDePerfil->{'correo-contacto-user'} }}
	</td>
	<td>
	</td>
@endif
@endsection

@section('form-pagina')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::text('pagina',$InfoDePerfil->{'pagina-web-user'} , array('required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@else
	<td>
		{{ $InfoDePerfil->{'pagina-web-user'} }}
	</td>
	<td>
	</td>
@endif
@endsection



@section('table-security')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
<table class="table table-responsive table-usuario">
		<thead>
		<th colspan="3">Seguridad</th>	
		</thead>
		<tr>
			<td>Respuesta:</td>
			{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
	<td>
		{{ Form::select('pregunta',$pregunta,$InfoDePerfil->{'id-security'},['class'=>'form-control'])}}
	<br>
		{{ Form::text('respuesta', Session::get('User')->{'answer'}, array('required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
			{{Form::close()}}
		</tr>	
		<tr>
			<td>Contraseña:
		{{Form::open(array('class' => 'form-index','url' => '/Modify','method' => 'post'))}}
				<span class="input-group-addon look-pass-general look-pass-perfil">
				<input type="checkbox" onclick="MostrarPass()">
				</span>
			</td>
		<td>
		{{ Form::input('password', 'contrasena', Session::get('User')->{'pass-user'}, array('id' => 'pass','required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
			{{Form::close()}}
	</tr>						
</table>
@endif
@endsection