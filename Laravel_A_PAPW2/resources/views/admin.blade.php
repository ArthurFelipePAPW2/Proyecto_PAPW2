@extends('master-admin')
@section('title','Gamer')

@section('agregar-distribuidora')
<div id="AgregarCuriosidad" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
                            <div class="col-sm-12 Modal-Text">
                            <h4>Agregar Distribuidora</h4>
                            </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                            {{Form::open(array('url' => 'AgregarDistribuidora','method' => 'post'))}}
                               <div class="form-group"> 
                     {{ Form::label('Distribuidora','Ingrese una distribuidora') }}
                     {{ Form::text('distribuidora',null, array('class'=>'form-control', 'placeholder'=>'Agregue una distribuidora')) }}
                  </div>  
                <div class="form-group">
                     {{ Form::label('Pais','Seleccione un pais') }}
                       {{ Form::select('pais', $paises,null,['class'=>'form-control'])}}
                               </div>        
                                {{Form::button('Agregar', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}          
                             
                            {{Form::close()}}
                      
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
@endsection

@section('peticion')
@foreach($suggestion as $sugerencia)
<div class="row sugerencia">
     <div class="col-md-1">
      <center>
      {{Form::open(array('url' => '/Modify','method' => 'post'))}}
        {{ Form::hidden('peticion', '1') }}
        {{ Form::button('<span class="glyphicon glyphicon-remove"></span>', array('type' => 'submit', 'class'=>'enviar-peticion')) }}
      {{Form::close()}}
  </center>
   </div>
 <div class="col-md-2">
     <center>
      <p class="user-solicitud">{{ $sugerencia->Usuario->{'name-user'} }}</p>
      <img src="data:;base64,{{ $sugerencia->Usuario->{'avatar'} }}" class="img-responsive img-solicitud">
      </center>
   </div>
   <div class="col-md-4 titulo-solicitud">
    <h3>Titulo:</h3>
     {{ $sugerencia->{'game-suggested'} }}
   </div>
   <div class="col-md-5">
    <h3>Descripcion:</h3>
     {{ $sugerencia->{'reason'} }} <br><br>
      <a target="_blank" href="{{ $sugerencia->{'link'} }}">Ver el trailer del juego</a>
   </div>
</div><br>
@endforeach		
@endsection

@section('agregar-vdj')
<!--MODAL DE AGREGAR VDJ-->
		<div id="agregarvdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Agregar Videojuego</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           {{ Form::open(array('url' => 'registrarvdj','method' => 'post','files' => true)) }}
                           {{ Form::hidden('administrador', Session::get('Admin')->{'id-administrador'}) }} 
                               <div class="form-group">
                               	{{ Form::text('nombre', null, array('placeholder'=>'Nombre del videojuego','class' => 'form-control input-sm','required')) }}
                               </div> 
                               <div class="form-group"> 
                                 {{ Form::select('plataforma[]', $platform,  null, ['class' => 'form-control input-sm', 'multiple' => 'multiple']) }}        
                               </div> 
                               <div class="form-group">
                               	{{ Form::text('productor', null, array('placeholder'=>'Productor','class' => 'form-control input-sm','required', 'id' => 'gProductor')) }}     
                               </div>
                                <div class="form-group">
                                {{ Form::select('desarrolladora', $distributor,null,['class'=>'form-control input-sm'])}}
                               </div>
                               <div class="form-group">
                               	{{ Form::select('genero[]', $genero,null,  ['class' => 'form-control input-sm', 'multiple' => 'multiple']) }}     
                               </div>
                               <div class="form-group">
                                {{ Form::select('distribuidora', $distributor,null,['class'=>'form-control input-sm'])}}
                               </div>
                               <div class="form-group">
                            	{{ Form::text('modo', null, array('placeholder'=>'Modo','class' => 'form-control input-sm','required')) }}     
                               </div>
                               <div class="form-group">
                               	{{ Form::textarea('descripcion', null, array('placeholder'=>'Descripción del Videojuego','class' => 'textarea-agregar-vdj','required')) }}     
                               <div class="form-group">
                               	{{ Form::label('file-upload','Subir Imagen',array('class' => 'custom-file-upload-index custom-admin-file')) }}
   								{{ Form::file('imagen',array('id' => 'file-upload')) }}	
                               </div>    
                                {{Form::button('Agregar', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}                         
                            {{Form::close()}}
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
@endsection

@section('borrar-vdj')
<!--MODAL DE BORRAR VDJ-->
		<div id="borrarvdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Borrar Videojuego</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                            {{Form::open(array('url' => '/BorrarJuego','method' => 'post'))}}
                            {{ Form::hidden('admin', Session::get('Admin')->{'id-administrador'}) }} 
                            <div class="form-group">
                               	  {{ Form::label('VideoJuegos','Selecciona el Videojuego a Borrar') }}
                                 {{ Form::select('videojuego', $videogame,  null, ['class' => 'form-control input-sm']) }}        
                            </div>  
								<div class="form-group">
										{{ Form::password('password', array('class' => 'form-control input-sm','id'=>'pass','placeholder' =>'Ingresa tu contraseña','required')) }}
                               </div>        
                                {{Form::button('Borrar', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}          
                             
                            {{Form::close()}}
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

@endsection

@section('alta-vdj')
<!--MODAL DE ALTA VDJ-->
    <div id="altavdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
                            <div class="col-sm-12 Modal-Text">
                            <h4>Rotornar Videojuego</h4>
                            </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                            {{Form::open(array('url' => '/AltaJuego','method' => 'post'))}}
                            {{ Form::hidden('admin', Session::get('Admin')->{'id-administrador'}) }} 
                            <div class="form-group">
                                  {{ Form::label('VideoJuegos','Selecciona el Videojueg que quieres regresar') }}
                                 {{ Form::select('downgame', $downgame,  null, ['class' => 'form-control input-sm', 'required']) }}        
                            </div>  
                <div class="form-group">
                    {{ Form::password('password', array('class' => 'form-control input-sm','id'=>'pass','placeholder' =>'Ingresa tu contraseña','required')) }}
                               </div>        
                                {{Form::button('Borrar', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}          
                             
                            {{Form::close()}}
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
@endsection

@section('borrar-curiosidad')
<!--MODAL DE BORRAR CURIOSIDAD-->
		<div id="borrarcuriosidad" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Borrar Curiosidad</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                            {{Form::open(array('url' => 'BorrarCuriosidad','method' => 'post'))}}
                            {{ Form::hidden('admin', Session::get('Admin')->{'id-administrador'}) }} 
                               <div class="form-group"> 
                               	     {{ Form::label('Curiosidad','Selecciona la curiosidad a Borrar') }}
								     {{ Form::text('curiosidad', null, array('placeholder'=>'Id DiduKnow','class' => 'form-control input-sm','required')) }}
								  </div>  
								<div class="form-group">
										{{ Form::password('password', array('class' => 'form-control input-sm','id'=>'pass','placeholder' =>'Ingresa tu contraseña','required')) }}
                               </div>        
                                {{Form::button('Borrar', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}          
                             
                            {{Form::close()}}
                      
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
@endsection

@section('agregar-curiosidad')
 <!--MODAL DE AGREGAR CURIOSIDAD-->
		<div id="agregarcuriosidad" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Agregar Curiosidad</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                            {{ Form::open(array('url' => 'agregarcuriosidad','method' => 'post')) }}
                            {{ Form::hidden('admin', Session::get('Admin')->{'id-administrador'}) }}   
                               <div class="form-group">

                                {{ Form::textarea('texto', null, array('placeholder'=>'¿Sabías Qué?...','required','class'=>'textarea-agregar-vdj')) }}    
                            	</div>                                               
                                  {{Form::button('Agregar', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}           
                            {{Form::close()}}
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
@endsection

@section('alta-usuario')
<!--MODAL DE ALTA USUARIO-->
		<div id="altauser" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Desbloquear Usuario</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           {{Form::open(array('url' => 'AltaUser','method' => 'post'))}}
                           {{ Form::hidden('admin', Session::get('Admin')->{'id-administrador'}) }} 
                               <div class="form-group">
                               	      {{ Form::label('usuario','Ingresa el Id del usuario') }}
								     {{ Form::text('user', null, array('placeholder'=>'Id User','class' => 'form-control input-sm','required')) }}     
								  </div>  
								<div class="form-group">
										{{ Form::password('password', array('class' => 'form-control input-sm','id'=>'pass','placeholder' =>'Ingresa tu contraseña','required')) }}
                               </div>        
                                {{Form::button('Quitar Bloqueo', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}          
                             
                            {{Form::close()}}
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
@endsection

@section('baja-usuario')
<!--MODAL DE BORRAR USUARIO-->
		<div id="bajauser" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Bloquear Usuario</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                          {{Form::open(array('url' => 'BajaUser','method' => 'post'))}}
                          {{ Form::hidden('admin', Session::get('Admin')->{'id-administrador'}) }}  
                               <div class="form-group">
                               	      {{ Form::label('usuario','Ingresa el Id del usuario') }}
								     {{ Form::text('user', null, array('placeholder'=>'Id User','class' => 'form-control input-sm','required')) }}     
								  </div>  
								<div class="form-group">
										{{ Form::password('password', array('class' => 'form-control input-sm','id'=>'pass','placeholder' =>'Ingresa tu contraseña','required')) }}
                               </div>        
                                {{Form::button('Bloquear', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}          
                             
                            {{Form::close()}}
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
@endsection

@section('modificar-vdj')
<!--MODAL DE MODIFICAR VDJ-->
		<div id="modificarvdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Modificar Videojuego</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                          {{Form::open(array('url' => '/Modify','method' => 'post'))}}
                               <div class="form-group">
                               	     {{ Form::label('VideoJuegos','Selecciona el Videojuego a Modificar') }}
								                     {{ Form::select('videojuego', $videogame,  null, ['class' => 'form-control input-sm', 'id' => 'idGame']) }}
								  </div>  
                            <input type="button" name="view" value="Modificar" id="boton1" data-toggle="modal" data-target="#infovdj" class="btn btn-default btn-xs btn-login boton"/>

                              <!--<a data-toggle="modal" data-target="#infovdj" class = "view_info"><p class="modificar-vdj-button">Modificar</p></a>-->                          
                            {{Form::close()}}
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
@endsection

@section('info-vdj')
        <!--MODAL CON TODA LA INFO DE VDJ-->
		<div id="infovdj" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Información Actual</h4>
                            <h1 id = "prueba"></h1>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body" id = "info_game">
                      <center>
                          {{Form::open(array('url' => '/ActJuego','method' => 'post'))}}
                               {{ Form::hidden('idGame', '', array('id' => 'gHidden')) }}

                               <div class="form-group">
                               	{{ Form::text('nombre', 'Nombre del juego', array('class' => 'form-control input-sm','required', 'id' => 'gName')) }} 
                               </div> 

                               <div class="form-group">
                               	{{ Form::text('productor', null, array('placeholder'=>'Productor','class' => 'form-control input-sm','required', 'id' => 'gNProductor')) }} 
                               </div>

                               <div class="form-group">
                               	{{ Form::select('desarrolladora', $distributor,null,['class'=>'form-control input-sm', 'id' => 'gDesarrolladora'])}} 
                               </div>

                               <div class="form-group">
                               	{{ Form::select('distribuidora', $distributor,null,['class'=>'form-control input-sm', 'id' => 'gDistribuidora'])}} 
                               </div>

                               <div class="form-group">
                               	{{ Form::text('modo', 'Modo del juego', array('class' => 'form-control input-sm','required', 'id' => 'gMode')) }} 
                               </div>

                               <div class="form-group">
                               {{ Form::textarea('descripcion', '' , array('class' => 'textarea-agregar-vdj','required', 'id' => 'gDescription')) }}  
                               <div class="form-group">

                               </div>                             
                                {{Form::button('Modificar', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}                         
                            {{Form::close()}}
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
@endsection