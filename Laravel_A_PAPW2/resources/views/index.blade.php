@extends('master-index')
@section('title','Gamers')

@section('alert')
  @if($msg != NULL)
  <div class="container">
  <div class="row">
      <div class="col-md-12">
  @if($msg == 'verdadero')
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Success!</strong> Su nueva contraseña es: <strong>{{ $user->{'pass-user'} }}</strong>
      </div> 
  @else
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Error!</strong> Los datos introducidos no son correctos
      </div> 
  @endif
      </div>
  </div>
  </div>
  @endif
@endsection

@section('lost-ing-mail')
{{ Form::open(array('url' => 'Lost-password','method' => 'post')) }}

<div class="form-group">
    {{ Form::text('email2', null, array('placeholder'=>'Ingrese su email','class' => 'form-control','required')) }}
</div>
<div class="form-group">
    {{ Form::select('pregunta2', $pregunta,'null',['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::text('respuesta2', null, array('placeholder'=>'Ingrese su respuesta','class' => 'form-control','required')) }}
</div>
<br><br>
    {{ Form::submit('Enviar',array('class' => 'btn btn-default btn-xs btn-login','data-miss'=>'modal')) }}
   
{{ Form::close() }}
@endsection

@section('formulario')

{{Form::open(array('class' => 'form-index','url' => 'registrar','method' => 'post','files' => true))}}
@foreach($errors->all() as $error)
<p class="alert alert-danger">{{$error}}</p>
@endforeach

<div class="form-group row">
            {{Form::label('Nombre','Nombre',array('class' => 'col-sm-2 col-form-label'))}}
    <div class="col-sm-5">
            {{ Form::text('username', null, array('placeholder'=>'Ingrese su nombre','class' => 'form-control','required')) }}
       
    </div>
     <div class="col-sm-5">
            {{ Form::text('apellido', null, array('placeholder'=>'Ingrese su apellido','class' => 'form-control','required')) }}
       
    </div>
</div>
<div class="form-group row">
            {{Form::label('Email','Email',array('class' => 'col-sm-2 col-form-label'))}}
    <div class="col-sm-10">
            {{ Form::email('email', null, array('placeholder'=>'Ingrese su E-mail','class' => 'form-control','required')) }}
       
    </div>
</div>
<div class="form-group row">
  {{Form::label('Password','Password',array('class' => 'col-sm-2 col-form-label'))}}
  <div class="col-sm-10">
	  <div class="input-group">
		{{ Form::password('password', array('class' => 'form-control','id'=>'pass','placeholder' =>'Ingrese una contraseña','required')) }}
			<span class="input-group-addon look-pass-general look-pass-index">
				{{ Form::checkbox('', '', true, ['onClick' => 'MostrarPass()']) }}
			</span>    
	  </div>
  </div>
</div>

<div class="form-group row">
            {{ Form::label('Genero','Genero',array('class' => 'col-sm-2 col-form-label')) }}
    <div class="col-sm-4 gender-1">
            {{ Form::radio('genero', '1', true) }} {{ Form::label('Hombre','Hombre') }}   
    </div>
     <div class="col-sm-4 gender-0">
            {{ Form::radio('genero', '0') }} {{ Form::label('Mujer','Mujer') }}     
    </div>
</div>

<div class="form-group row">
      {{ Form::label('Nacimiento','Nacimiento',array('class' => 'col-sm-2 col-form-label')) }}
    <div class="col-sm-10">
        {{ Form::date('date', null, array('class' => 'form-control','required')) }}
     </div>
</div>

<div class="form-group row">
    {{ Form::label('Ciudad','Ciudad',array('class' => 'col-sm-2 col-form-label')) }}
    <div class="col-sm-10">
    {{ Form::select('ciudad', $ciudades, 'null',['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
    {{ Form::label('Pregunta','Pregunta',array('class' => 'col-sm-2 col-form-label')) }}
    <div class="col-sm-10">
    {{ Form::select('pregunta', $pregunta,'null',['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
            {{Form::label('Respuesta','Respuesta',array('class' => 'col-sm-2 col-form-label'))}}
    <div class="col-sm-10">
            {{ Form::text('answer', null, array('placeholder'=>'Ingrese una respuesta','class' => 'form-control','required')) }}
       
    </div>
</div>

<div class="form-group row">
   	{{ Form::label('Avatar','Avatar',array('class' => 'col-sm-2 col-form-label')) }}
   	<div class="col-sm-10">
   		{{ Form::label('file-upload','Subir Imagen',array('class' => 'custom-file-upload-index')) }}
   		{{ Form::file('imagen',array('id' => 'file-upload')) }}
	</div>
</div>

<div class="form-group row">
    <div class="col-md-2 col-md-offset-5">
     	<center>{{ Form::submit('Sign In',array('class' => "btn btn-primary sign-up-btn")) }}</center>
    </div>                
</div>
{{Form::close()}}
@endsection

@section('login')
{{Form::open(array('class' => 'form-inline','url' => 'login','method' => 'post'))}}
   <div class="form-group">
     {{ Form::email('email', null, array('placeholder'=>'E-mail','class' => 'form-control input-sm','required')) }}
   </div>
    <div class="form-group">
      <div class="input-group">
        {{ Form::password('password', array('class' => 'form-control input-sm','id'=>'passL','placeholder' =>'Ingrese una contraseña','required')) }}
        <span class="input-group-addon look-pass-general look-pass-index">
            {{ Form::checkbox('', '', true, ['onClick' => 'MostrarPassLogin()']) }}
        </span>                                
      </div>
    </div>   <br><br>
    {{ Form::submit('Login',array('class' => "btn btn-default btn-xs btn-login")) }}
{{Form::close()}}
@endsection