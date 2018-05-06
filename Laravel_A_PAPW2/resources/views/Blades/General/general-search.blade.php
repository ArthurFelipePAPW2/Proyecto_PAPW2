{{Form::open(array('class' => 'navbar-form navbar-left','url' => '/Busqueda','method' => 'post'))}}
<div class="form-group">
	{{ Form::text('busqueda', null, array('placeholder'=>'Buscar','class' => 'form-control search-bar')) }}
	{{ Form::button('<i class="glyphicon glyphicon-search"></i>', array('type' => 'submit', 'class' => 'btn btn-default')) }}
</div>
{{Form::close()}}