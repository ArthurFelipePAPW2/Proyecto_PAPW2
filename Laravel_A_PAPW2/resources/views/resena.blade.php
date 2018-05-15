@extends('master-resena')
@section('title','Gamers')

@section('comentarios')

<div class="slider-comments container slide active">

@for($x=1; $x <= count($Comentarios) ; $x++)
<div class="container resena comentario">
			<div class="row">
				<div class="col-md-2">
					<center>
						<img src="data:;base64,{{ $Comentarios[$x-1]->Usuario->{'avatar'} }}" class="img-responsive img-rounded img-comentario">					
						<p class="name-user-comentario">
							{{ $Comentarios[$x-1]->Usuario->{'name-user'} }}
						</p>
						<br>
						<div class="btn-group btn-util">
				        	<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-up"></span></button>
							<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-down"></span></button>
						</div>
					</center>
				</div>
				<div class="col-md-10">
					<p class="fecha-comentario">Posteado el {{ $Comentarios[$x-1]->{'created_at'} }}</p>
					<p class="likes-comentario">[Likes: 50 | Dislikes: 10]</p>
					<div class="row">
						<h3 class="titulo-comentario">{{ $Comentarios[$x-1]->{'titulo'} }}
							@foreach($Scores as $puntuacion)
								@if($Comentarios[$x-1]->Usuario->{'id-user'} == $puntuacion->{'id-user'})

									@for($y=1; $y<=$puntuacion->{'points'}; $y++)
									<img src="../Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
									@endfor

									@for($y=1; $y<=(5-$puntuacion->{'points'}); $y++)
									<img src="../Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
									@endfor

								@endif
							@endforeach				
							
	  					</h3>

						<p class="text-comentario">
							{{ $Comentarios[$x-1]->{'text-review'} }}
						</p>
					</div>
				</div>
			</div>
		</div>

		<br>
				@if($x % 5 === 0)
		</div>
		
		<div class="slider-comments container slide ">
		@endif
		@endfor
</div>

<div class="container next-comment">
	<div class="row">
		<div class="col-md-1 col-xs-1">
			<button class="left-arrow" id="left-arrow">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</button>
		</div>
		<div class="col-md-10 col-xs-10">
			<p class="buttonSlide"></p>
		</div>
		<div class="col-md-1 col-xs-1">
			<button class="right-arrow" id="right-arrow">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</button>
		</div>
	</div>
</div>
@endsection


@section('resenas')
<div class="container resena">
	      	<div class="row">
	        	<div class="col-md-12 article-info-resena">
	        		<div class="col-md-6">     					
	        			<img src="data:;base64,{{ $InfoDeResena->{'cover'} }}" class="img-responsive img-resena img-rounded">
	        		</div>
  					<div class="col-md-6">
  						<div class="table-responsive">
							<table class="table table-info">
							 <tr>
							 	<td>Titulo</td>
							 	<td>{{ $InfoDeResena->{'name-videogame'} }}</td>
							 </tr>
							 <tr>
							 	<td>Plataforma:</td>
							 	<td>
							 		@foreach($InfoDeResena->ForPlatforms as $plataforma)
							 		&raquo;
							 			{{ $plataforma->{'name-platform'} }} <br>
							 		@endforeach
							 </td>
							 </tr>
							 <tr>
							 	<td>Productor(es):</td>
							 	<td>{{ $InfoDeResena->{'productor'} }}</td>
							 </tr>
							 <tr>
							 	<td>Desarrollador:</td>
							 	<td>{{ $InfoDeResena->developer->{'name-distributor'} }}</td>
							 </tr>
							<tr>
							 	<td>Género(s):</td>
							 	<td>
							 		@foreach($InfoDeResena->ForGenres as $genero)
							 		&raquo;
							 			{{ $genero->{'name-gender'} }} <br>
							 		@endforeach
							 	</td>
							 </tr>
							 <tr>
							 	<td>Distribuidora(s):</td>
							 	<td>{{ $InfoDeResena->distributor->{'name-distributor'} }}</td>
							 </tr>
							 <tr>
							 	<td>Modo de Juego:</td>
							 	<td>{{ $InfoDeResena->{'mode'} }}</td>
							 </tr>
							 <tr>
							 	<td>Calificación:</td>
							 	<td>
							 		<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
									<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
									<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
									<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart-resena">
									<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
  								</td>
							 </tr>
							</table>
						</div>
  					</div>	  					
  				</div>
            </div>  
        </div>
       	   	<!--Fin de reseña-->
		<div class="container resena">
		       	<div class="row">
				    <div class="col-md-12 article-info-sinopsis">
				        <p class="text-descripcion">Descripcion</p>
				        <p> {{ $InfoDeResena->{'description'} }}</p>
			  		</div>
			  	</div>
		</div>
		<br>
@endsection

@section('formulario')
<div class="container resena comentar">
	<div class="row">
		<div class="col-md-2">
			<center><img src="data:;base64,{{ $user->{'avatar'} }}" class="img-responsive img-rounded img-comentario"><p class="me-user-comentario"><p class="name-user-comentario">{{ $user->{'name-user'} }}</p><br></center>
		</div>
		<div class="col-md-10">
			<p class="fecha-comentario">Hoy es {{ $fecha }}</p>
			<div class="row">

				{{Form::open(array('url' => 'SendReview','method' => 'post'))}}
				{{Form::hidden('videogame',$InfoDeResena->{'id-videogame'})}}
				{{ Form::text('titulo-comentario', null, array('placeholder'=>'Titulo de tu comentario','id' => 'texto-comentar','required')) }}
				<br>
				{{ Form::textarea('comentario-texto', null, array('placeholder'=>'¿Qué te pareció este juego?','required')) }}
				<br>
				<div class="rated-heart" id="corazon1">
					{{ Form::radio('rate', '1',null, ['onClick' => 'Evaluar(1)','checked']) }}
				</div>
				<div class="sin-rating" id="corazon2">
					{{ Form::radio('rate', '2',null, ['onClick' => 'Evaluar(2)']) }}
				</div>
				<div class="sin-rating" id="corazon3">
					{{ Form::radio('rate', '3',null, ['onClick' => 'Evaluar(3)']) }}
				</div>
				<div class="sin-rating" id="corazon4">
					{{ Form::radio('rate', '4',null, ['onClick' => 'Evaluar(4)']) }}
				</div>
				<div class="sin-rating" id="corazon5">
					{{ Form::radio('rate', '5',null, ['onClick' => 'Evaluar(5)']) }}
				</div>
				
				{{ Form::submit('Comentar') }}

			{{Form::close()}}


			</div>
		</div>
	</div>
</div><br>
@endsection

@section('botonfav')
<!-- Felipe aca cargas el boton correspondiente, con una consulta en la base de datos, ningun controlador esta creado -->

{{Form::open(array('url' => 'AgregarFavorito','method' => 'post'))}}
{{ Form::hidden('usuario', 1) }} 
<button class="botonFavorito favorito"></button>
{{Form::close()}}

<!-- 
{{Form::open(array('url' => 'BorrarFavorito','method' => 'post'))}}
{{ Form::hidden('usuario', 1) }} 
<button class="botonFavorito Nofavorito"></button>
{{Form::close()}} 
-->
@endsection

@section('modificar-review')
<button class="Modificar-review" data-toggle="modal" data-target="#modifyreview">
	<span class="glyphicon glyphicon-pencil"></span>
</button>
		<div id="modifyreview" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Modificar Review</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                            {{ Form::open(array('url' => 'agregarcuriosidad','method' => 'post')) }}
                            {{ Form::hidden('user', 1) }}   
                           <div class="form-group">

                         {{ Form::text('texto', null, array('required','class'=>'form-control')) }}    
                        </div> 
                         <div class="form-group">

                         {{ Form::textarea('texto', null, array('required','class'=>'textarea-agregar-vdj')) }}    
                        </div>   

                        <div class="form-group radios-modal">

                        <div class="rated-heart" id="corazon1">
							{{ Form::radio('rate', '1',null, ['onClick' => 'Evaluar(1)','checked']) }}
						</div>
						<div class="sin-rating" id="corazon2">
							{{ Form::radio('rate', '2',null, ['onClick' => 'Evaluar(2)']) }}
						</div>
						<div class="sin-rating" id="corazon3">
							{{ Form::radio('rate', '3',null, ['onClick' => 'Evaluar(3)']) }}
						</div>
						<div class="sin-rating" id="corazon4">
							{{ Form::radio('rate', '4',null, ['onClick' => 'Evaluar(4)']) }}
						</div>
						<div class="sin-rating" id="corazon5">
							{{ Form::radio('rate', '5',null, ['onClick' => 'Evaluar(5)']) }}
						</div>  
                        </div>                                                    
                                  {{Form::button('Agregar', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}           
                            {{Form::close()}}
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
@endsection