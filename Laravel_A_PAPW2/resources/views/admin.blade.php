@extends('master-admin')
@section('title','Gamer')

@section('peticion')
<tr>
		<td class="titulo-solicitud">Videojuego1</td>	
		<td>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</td>
		<td>
			<center><p class="user-solicitud">Bob1</p><img src="Imagenes/fondo.jpg" class="img-responsive img-solicitud"></center>
		</td>
		<td>
			<center>
			{{Form::open(array('url' => '/Modify','method' => 'post'))}}
				{{ Form::hidden('peticion', '1') }}
				{{ Form::button('<span class="glyphicon glyphicon-remove"></span>', array('type' => 'submit', 'class'=>'enviar-peticion')) }}
			{{Form::close()}}
	</center>
	</td>
</tr>		
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
                           {{ Form::hidden('administrador', 1) }} 
                               <div class="form-group">
                               	{{ Form::text('nombre', null, array('placeholder'=>'Nombre del videojuego','class' => 'form-control input-sm','required')) }}
                               </div> 
                               <div class="form-group"> 
                                 {{ Form::select('plataforma[]', $platform,  null, ['class' => 'form-control input-sm', 'multiple' => 'multiple']) }}        
                               </div> 
                               <div class="form-group">
                               	{{ Form::text('productor', null, array('placeholder'=>'Productor','class' => 'form-control input-sm','required')) }}     
                               </div>
                               <div class="form-group">
                               	{{ Form::text('desarrollador', null, array('placeholder'=>'Desarrollador','class' => 'form-control input-sm','required')) }}     
                               </div>
                               <div class="form-group">
                               	{{ Form::select('genero[]', $genero,null,  ['class' => 'form-control input-sm', 'multiple' => 'multiple']) }}     
                               </div>
                               <div class="form-group">
                               	{{ Form::text('distribiudora', null, array('placeholder'=>'Distribiudora','class' => 'form-control input-sm','required')) }}     
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
                            {{Form::open(array('url' => '/Modify','method' => 'post'))}}
                               <div class="form-group">
                               	  {{ Form::label('VideoJuegos','Selecciona el Videojuego a Borrar') }}
								       {{ Form::select('videojuego', array(
										'1' => 'VideoJuego1', 
										'2' => 'VideoJuego2',
										'3' => 'VideoJuego3',
										'4' => 'VideoJuego4',
										'5' => 'VideoJuego5',
										'6' => 'VideoJuego6'),
									'null',['class'=>'form-control'])}}
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
                            {{ Form::hidden('admin', 1) }} 
                               <div class="form-group"> 
                               	     {{ Form::label('Curiosidad','Selecciona la curiosidad a Borrar') }}
								     {{ Form::select('curiosidad', array(
										'1' => 'Curiosidad1', 
										'2' => 'Curiosidad2',
										'3' => 'Curiosidad3',
										'4' => 'Curiosidad4',
										'5' => 'Curiosidad5',
										'6' => 'Curiosidad6'),
									'null',['class'=>'form-control'])}}
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
                            {{ Form::hidden('admin', 1) }}   
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
                           {{ Form::hidden('admin', 1) }} 
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
                          {{ Form::hidden('admin', 1) }}  
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
								       {{ Form::select('videojuego', array(
										'1' => 'VideoJuego1', 
										'2' => 'VideoJuego2',
										'3' => 'VideoJuego3',
										'4' => 'VideoJuego4',
										'5' => 'VideoJuego5',
										'6' => 'VideoJuego6'),
									'null',['class'=>'form-control'])}}
								  </div>  
                               <a data-toggle="modal" data-target="#infovdj"><p class="modificar-vdj-button">Modificar</p></a>                          
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
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                          {{Form::open(array('url' => '/Modify','method' => 'post'))}}
                               <div class="form-group">
                               	{{ Form::text('nombre', 'Nombre del juego', array('class' => 'form-control input-sm','required')) }} 
                               </div> 
                               <div class="form-group">
                               	{{ Form::text('plataforma', 'Plataforma del juego', array('class' => 'form-control input-sm','required')) }} 
                               </div> 
                               <div class="form-group">
                               	{{ Form::text('productor','Productor del juego', array('class' => 'form-control input-sm','required')) }} 
                               </div>
                               <div class="form-group">
                               	{{ Form::text('desarrollador', 'Desarrollador del juego', array('class' => 'form-control input-sm','required')) }} 
                               </div>
                               <div class="form-group">
                               	{{ Form::text('genero', 'Genero del juego', array('class' => 'form-control input-sm','required')) }} 
                               </div>
                               <div class="form-group">
                               	{{ Form::text('productor', 'Productor del juego', array('class' => 'form-control input-sm','required')) }} 
                               </div>
                               <div class="form-group">
                               	{{ Form::text('distribuidora', 'Distribiudora del juego', array('class' => 'form-control input-sm','required')) }} 
                               </div>
                               <div class="form-group">
                               	{{ Form::text('modo', 'Modo del juego', array('class' => 'form-control input-sm','required')) }} 
                               </div>
                               <div class="form-group">
                               {{ Form::textarea('descripcion', 'Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion Descripcion' , array('class' => 'textarea-agregar-vdj','required')) }}  
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