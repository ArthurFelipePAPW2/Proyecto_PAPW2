{{Form::open(array('class' => 'navbar-form navbar-left','url' => 'search','method' => 'post'))}}
@csrf
	{{ Form::text('busqueda', null, array('placeholder'=>'Buscar','class' => 'form-control search-bar')) }}
	{{ Form::button('<i class="glyphicon glyphicon-search"></i>', array('type' => 'submit', 'class' => 'btn btn-default boton-buscar')) }}
{{Form::close()}}