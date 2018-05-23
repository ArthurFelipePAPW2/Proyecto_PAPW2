@extends('master-perfil')
@section('title','Gamer')

@section('form-pass')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
<br>
<table class="table table-responsive table-usuario">
	<thead>
	<th colspan="3">Cambiar mi contraseña</th>	
	</thead>	
	<tr>
	<td>
		Password:		
		<span class="input-group-addon look-pass-general look-pass-perfil">
            {{ Form::checkbox('', '', true, ['onClick' => 'MostrarPass()']) }}
        </span>  
	</td>
	{{Form::open(array('class' => 'form-index','url' => 'ModifyPass','method' => 'post'))}}
	<td>
		{{ Form::password('pass', array('id'=>'pass','required')) }}
	</td>
	<td>
		{{ Form::button('<span class="glyphicon glyphicon-pencil"></span>', array('type' => 'submit')) }}
	</td>
	{{Form::close()}}	
	</tr>			
</table>
@endif
@endsection

@section('fotito')
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
<div class="img-perfil-pag"><img src="data:;base64,{{ $InfoDePerfil->{'avatar'} }}" class="img-rounded img-responsive"><button data-toggle="modal" data-target="#cambiarfoto"><span class="glyphicon glyphicon-pencil"></span></button></div>
@else
<div class="img-perfil-pag"><img src="data:;base64,{{ $InfoDePerfil->{'avatar'} }}" class="img-rounded img-responsive"><button></button></div>
@endif
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
@if($InfoDePerfil->{'id-user'} == Session::get('User')->{'id-user'})
<div id="cambiarfoto" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Cambiar Foto De Perfil</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
						{{Form::open(array('class' => 'form-index','url' => 'ModifyImage','method' => 'post','files' => true))}}
						<div class="form-group input-div">
							{{ Form::label('file-upload','.',array('class' => 'custom-file-upload')) }}
						   	{{ Form::file('imagen',array('id' => 'file-upload','required')) }}
						</div>        
						{{ Form::submit('Cambiar Foto',array('class' => "btn btn-default btn-xs btn-login")) }}
						{{Form::close()}}
						</center>
                    </div>                  
                </div>
                </div>
            </div>
            @endif
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



