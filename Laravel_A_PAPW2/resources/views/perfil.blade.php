@extends('master-perfil')
@section('title','Gamer')

@section('img')
<img src="data:;base64,{{ $InfoDePerfil->{'avatar'} }}" class="img-rounded img-responsive">
@endsection

@section('nombre-perfil')
{{ $InfoDePerfil->{'name-user'} }} {{ $InfoDePerfil->{'last-name-user'} }}
@endsection

@section('acerca-de-mi')
<b>Fecha de cumpleaños: </b> {{ $InfoDePerfil->{'birthday'} }} <br><br>
<b>Fecha de ingreso: </b>{{$InfoDePerfil->created_at}}
@endsection

@section('form-nombre')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
{{Form::open(array('class' => 'form-index','url' => 'ModifyName','method' => 'post'))}}
	<td>
		{{ Form::text('nombre', $InfoDePerfil->{'name-user'} , array('required')) }}
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
{{Form::open(array('class' => 'form-index','url' => 'ModifyLastName','method' => 'post'))}}
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

@section('form-img')
{{Form::open(array('class' => 'form-index','url' => 'ModifyImage','method' => 'post','files' => true))}}
<div class="form-group input-div">
	{{ Form::label('file-upload','.',array('class' => 'custom-file-upload')) }}
   	{{ Form::file('imagen',array('id' => 'file-upload','required')) }}
</div>        
{{ Form::submit('Cambiar Foto',array('class' => "btn btn-default btn-xs btn-login")) }}
{{Form::close()}}
@endsection

@section('form-ciudad')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
{{Form::open(array('class' => 'form-index','url' => 'ModifyCity','method' => 'post'))}}
	<td>
		{{ Form::select('ciudad',$ciudades,$InfoDePerfil->{'id-city'},['class'=>'form-control'])}}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
{{Form::close()}}
@else
	<td>
		{{ $InfoDePerfil->City->{'name-city'} }}
	</td>
	<td>
	</td>
@endif
@endsection

@section('form-correo')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
{{Form::open(array('class' => 'form-index','url' => 'ModifyEmail','method' => 'post'))}}
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
{{Form::open(array('class' => 'form-index','url' => 'ModifyWeb','method' => 'post'))}}
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


@section('fecha')
	{{ $InfoDePerfil->{'birthday'} }}
@endsection

@section('favoritos-user')	
<tr>
@for($x=1; $x <= count($favoritos) ; $x++)
		
			<td>
				<a href="/resena/{{ $favoritos[$x-1]->Videogame->{'id-videogame'} }}">
				<img src="data:;base64,{{ $favoritos[$x-1]->Videogame->{'cover'} }}" class="img-responsive miniaturas-perfil callout"><br>
			</a> 
		</td>
			@if($x == 10)
			</tr>
			<tr>
			@endif
		
@endfor
</tr>
@endsection



